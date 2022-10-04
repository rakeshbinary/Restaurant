<x-guest-layout>
    <main id="main" class="hero d-flex align-items-center section-bg">
        <div class="container">
            <div class="section-header">
                                <section id="book-a-table" class="book-a-table">
                                    <div class="container" data-aos="fade-up">

                                        <div class="section-header">
                                            <h2>Book A Table</h2>
                                            <p>Book <span>Your Stay</span> With Us</p>
                                        </div>

                                        <div class="row g-0">

                                            <div class="col-lg-4 reservation-img"
                                                style="background-image: url(/assets/img/reservation.jpg);" data-aos="zoom-out"
                                                data-aos-delay="200">
                                            </div>
                                        <div class="col-lg-8 d-flex align-items-center reservation-form-bg">
                                            <form method="POST" action="{{ route('reservations.store.step.one') }}">
                                                @csrf
                                                <div class="row gy-4">
                                                <div class="col-lg-4 col-md-6">
                                                    <label for="first_name" class="block text-sm font-medium text-gray-700"> First Name
                                                    </label>
                                                    <div class="mt-1">
                                                        <input type="text" id="first_name" name="first_name"
                                                            value="{{ $reservation->first_name ?? '' }}"
                                                            class="block w-full transition duration-150 ease-in-out appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                                                    </div>
                                                    @error('first_name')
                                                        <div class="text-sm text-red-400" style="color: red">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <label for="last_name" class="block text-sm font-medium text-gray-700"> Last Name
                                                    </label>
                                                    <div class="mt-1">
                                                        <input type="text" id="last_name" name="last_name"
                                                            value="{{ $reservation->last_name ?? '' }}"
                                                            class="block w-full transition duration-150 ease-in-out appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                                                    </div>
                                                    @error('last_name')
                                                        <div class="text-sm text-red-400" style="color: red">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <label for="email" class="block text-sm font-medium text-gray-700"> Email
                                                    </label>
                                                    <div class="mt-1">
                                                        <input type="email" id="email" name="email"
                                                            value="{{ $reservation->email ?? '' }}"
                                                            class="block w-full transition duration-150 ease-in-out appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                                                    </div>
                                                    @error('email')
                                                        <div class="text-sm text-red-400" style="color: red">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <label for="tel_number" class="block text-sm font-medium text-gray-700"> Phone
                                                        Number </label>
                                                    <div class="mt-1">
                                                        <input type="text" id="tel_number" name="tel_number" maxlength="10"
                                                            value="{{ $reservation->tel_number ?? '' }}"
                                                            class="block w-full transition duration-150 ease-in-out appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                                                    </div>
                                                    @error('tel_number')
                                                        <div class="text-sm text-red-400" style="color: red">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <label for="res_date" class="block text-sm font-medium text-gray-700"> Reservation
                                                        Date </label>
                                                    <div class="mt-1">
                                                        <input type="datetime-local" id="res_date" name="res_date"
                                                        min="{{ $min_date->format('Y-m-d\TH:i:s') }}"
                                                        max="{{ $max_date->format('Y-m-d\TH:i:s') }}"
                                                        value="{{ $reservation ? $reservation->res_date->format('Y-m-d\TH:i:s') : '' }}"
                                                            class="block w-full transition duration-150 ease-in-out appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                                                    </div>
                                                    @error('res_date')
                                                        <div class="text-sm text-red-400" style="color: red">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <label for="guest_number" class="block text-sm font-medium text-gray-700"> Guest
                                                        Number </label>
                                                    <div class="mt-1">
                                                        <input type="number" id="guest_number" name="guest_number"
                                                            value="{{ $reservation->guest_number ?? '' }}"
                                                            class="block w-full transition duration-150 ease-in-out appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                                                    </div>
                                                    @error('guest_number')
                                                        <div class="text-sm text-red-400" style="color: red">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                                <div class="mt-6 p-4">
                                                    <button type="submit"
                                                        class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg"
                                                        style="background-color: #ce1212; color:aliceblue">Next</button>

                                                </div>

                                            </form>
                                        </div>

                                    </div>
                                </section><!-- End Book A Table Section -->

                            </div>

            </div>
        </div>
    </main>
</x-guest-layout>
