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
                            <form method="POST" action="">
                                @csrf
                                <div class="row gy-4">
                                <div class="sm:col-span-6 pt-5">
                                    <label for="body" class="block text-sm font-medium text-gray-700">Step 2</label>
                                    <div class="mt-1" align=""center>
                                        <select name="table_id" id="table_id" style="margin-left: 50px"
                                            class="block w-full transition duration-150 ease-in-out appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5"
                                            style="width: 100%">
                                            @foreach ($tables as $table)
                                                <option value="{{ $table->id }}" @selected($table->id == $reservation->table_id)>
                                                    {{ $table->name }}
                                                    ({{ $table->guest_number }} Guests)
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @error('table_id')
                                        <div class="text-sm text-red-400" style="color: red">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mt-6 p-4">
                                     <a href="{{ route('reservations.step.one') }}"
                                        class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white" style="background-color: blue">Previous</a>
                                    <button type="submit"
                                        class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg"
                                        style="background-color: green; color:aliceblue">Make Reservation</button>

                                </div>
                            </div>

                            </form>

                        </div>

                    </div>
                </section><!-- End Book A Table Section -->

            </div>
        </div>
    </main>
</x-guest-layout>
