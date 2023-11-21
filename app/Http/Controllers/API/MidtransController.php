<?php

namespace App\Http\Controllers\API;

use Midtrans\Config;
use Midtrans\Transaction;
use Midtrans\Notification;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MidtransController extends Controller
{
    public function callback()
    {
        // Set config midtrans
        Config::$serverKey = config('services.midtrans.serverkey');
        Config::$isProduction = config('services.midtrans.isProduction');
        Config::$isSanitized = config('services.midtrans.isSanitized');
        Config::$is3ds = config('services.midtrans.is3ds');

        // Buat instance midtrans notif
        $notification = new Notification();

        // Assign ke variabel
        $status = $notification->transaction_status;
        $type = $notification->payment_type;
        $fraud = $notification->fraud_status;
        $order_id = $notification->order_id;

        // Get transaction id
        $order = explode('-', $order_id);

        // Cari transaksi berdasarkan id
        $transaction = Transaction::findOrFail($order[1]);

        // Handle notif status midtrans
        switch ($status) {
            case 'capture':
                if ($type === 'credit_card') {
                    if ($fraud === 'challenge') {
                        $transaction->status = 'PENDING';
                    } else {
                        $transaction->status = 'SUCCESS';
                    }
                }
                break;
            case 'settlement':
                $transaction->status = 'SUCCESS';
                break;
            case 'pending':
            case 'deny':
                $transaction->status = 'PENDING';
                break;
            case 'expire':
            case 'cancel':
                $transaction->status = 'CANCELLED';
                break;
            default:
                // Default handling for other status if needed
                break;
        }

        // Simpan transaksi
        $transaction->save();

        // Return response midtrans
        return response()->json([
            'meta' => [
                'code' => 200,
                'message' => 'Midtrans Notification Success'
            ]
        ]);
    }
}