    <!-- START: ASIDE MENU -->
    <section class="">
        <div class="border-t border-b border-gray-200 py-12 mt-16 px-4 " id="kontak">
          <div class="flex justify-center text-center mb-6">
            <h3 class="text-2xl capitalize font-semibold">Contact Us</h3>
          </div>

          <!-- START form contact -->
          <div class="flex">
            <div class="px-4 w-full md:w-1/2 mb-4 md:mb-0 border border-gray-300 rounded-xl p-4 h-54 overflow-y-auto">
                <form action="#" method="post" id="contact-form">
                  <label class="block mb-2"> Name <input type="text" name="name" 
                    class="bg-gray-100 rounded-xl py-3 px-5 w-full focus:outline-none" placeholder="Your name"/>
                  </label>

                  <label class="block mb-2"> Your Email <input type="email" name="email" 
                    class="bg-gray-100 rounded-xl py-3 px-5 w-full focus:outline-none" placeholder="Your email address"/>
                  </label>

                  <label class="block mb-2"> Phone Number <input type="tel" name="phone" 
                    class="bg-gray-100 rounded-xl py-3 px-5 w-full focus:outline-none"placeholder="Your phone number"/>
                  </label>

                  <label class="block mb-2"> Subject <input type="text" name="subject" 
                    class="bg-gray-100 rounded-xl py-3 px-5 w-full focus:outline-none"placeholder="Subject"/>
                  </label>

                  <label class="block mb-4"> Message <textarea name="message" 
                    class="bg-gray-100 rounded-xl py-3 px-5 w-full h-32 focus:outline-none"placeholder="Your message"></textarea>
                  </label>

                  <button type="submit" class="bg-pink-400 text-white rounded-xl py-3 px-6"> Get Started </button>
                </form>
            </div>
          <!-- END form contact -->

            <div class="flex-1 h-54 mb-4 md:mb-0">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d685.672013870182!2d107.12297562248915!3d-6.38378846229024!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69996adfe9a461%3A0x6639a59f6380d0b0!2sHery!5e0!3m2!1sid!2sid!4v1700899961547!5m2!1sid!2sid" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>

          <aside class="container mx-auto">
            <div class="px-4 w-full md:w-4/12 mb-4 md:mb-0 text-center mx-auto">
              <div class="flex justify-center mb-4">
                <img src="{{ url('/frontend/images/content/logo-dashboard.png') }}" alt="Luxspace | Fulfill your house with beautiful furniture" width="250px"/>
              </div>
            </div>

            <div class="flex flex-wrap -mx-4 justify-center">
              <div class="px-4 w-full md:w-2/12 mb-4 md:mb-0 accordion">
                <h5 class="text-lg font-semibold mb-2 relative">Overview</h5>
                <ul class="h-0 invisible md:h-auto md:visible overflow-hidden">
                  <li>
                    <a href="#" class="hover:underline py-1 block">Shipping</a>
                  </li>
                  <li>
                    <a href="#" class="hover:underline py-1 block">Refund</a>
                  </li>
                  <li>
                    <a href="#" class="hover:underline py-1 block">Promotion</a>
                  </li>
                </ul>
              </div>

              <div class="px-4 w-full md:w-2/12 mb-4 md:mb-0 accordion">
                <h5 class="text-lg font-semibold mb-2 relative">Company</h5>
                <ul class="h-0 invisible md:h-auto md:visible overflow-hidden">
                  <li>
                    <a href="#" class="hover:underline py-1 block">About</a>
                  </li>
                  <li>
                    <a href="#" class="hover:underline py-1 block">Career</a>
                  </li>
                  <li>
                    <a href="#" class="hover:underline py-1 block">Contact Us</a>
                  </li>
                </ul>
              </div>

              <div class="px-4 w-full md:w-2/12 mb-4 md:mb-0 accordion">
                <h5 class="text-lg font-semibold mb-2 relative">Kontak</h5>
                <ul class="h-0 invisible md:h-auto md:visible overflow-hidden">
                  <li>
                    <a href="#" class="hover:underline py-1 block">Terms & Conds</a>
                  </li>
                  <li>
                    <a href="#" class="hover:underline py-1 block">Privacy Policy</a>
                  </li>
                </ul>
              </div>

              {{-- <div class="px-4 w-full md:w-3/12 mb-4 md:mb-0">
                <h5 class="text-lg font-semibold mb-2 relative">Special Letter</h5>
                <form action="#">
                  <label class="relative w-full">
                    <input type="text" class="bg-gray-100 rounded-xl py-3 px-5 w-full focus:outline-none" placeholder="Your email adress"/>
                    <button class="bg-pink-400 absolute rounded-xl right-0 p-3">
                      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M23.6177 0.411971C23.6163 0.410624 23.6152 0.409187 23.6138 0.407839C23.6124 0.406492 23.6109 0.405414 23.6095 0.404157C23.236 0.049307 22.7002 -0.0573008 22.2098 0.126411L0.833871 8.13353C0.268743 8.34518 -0.0623361 8.87521 0.0098048 9.4523C0.0821332 10.0294 0.53462 10.4694 1.13589 10.547L11.5833 11.8968C11.6028 11.8994 11.6185 11.9143 11.6212 11.9332L13.0301 21.9417C13.1112 22.5177 13.5704 22.9512 14.1729 23.0204C14.2279 23.0268 14.2824 23.0298 14.3364 23.0298C14.8735 23.0298 15.3486 22.7229 15.5495 22.231L23.9077 1.75274C24.0994 1.28302 23.9882 0.76983 23.6177 0.411971ZM1.30534 9.34475C1.2819 9.34169 1.27136 9.34039 1.26728 9.30788C1.26325 9.27537 1.27319 9.27159 1.29508 9.26347L21.2946 1.77187L11.9404 10.7333C11.8794 10.7163 1.30534 9.34475 1.30534 9.34475ZM14.37 21.7892C14.3614 21.8102 14.358 21.8198 14.3236 21.8158C14.2897 21.8119 14.2883 21.8017 14.2852 21.7794C14.2852 21.7794 12.8535 11.6495 12.8358 11.5911L22.19 2.62972L14.37 21.7892Z"
                          fill="white"/>
                      </svg>
                    </button>
                  </label>
                </form>
              </div> --}}
            </div>
          </aside>
        </div>
      </section>
      <!-- END: ASIDE MENU -->
  
      <!-- START: FOOTER -->
      <footer class="flex text-center px-4 py-8 justify-center ">
        <p class="text-sm">
          Copyright 2023 • Es Teh Remaja
        </p>
      </footer>
      <!-- END: FOOTER -->