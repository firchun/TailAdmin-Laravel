<x-layout>
  <x-header></x-header>
   
        <!-- ===== Main Content Start ===== -->
        <main>
          <div class="mx-auto max-w-screen-2xl p-4 md:p-6 2xl:p-10">
            <!-- Breadcrumb Start -->
            <div
              class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between"
            >
              <h2 class="text-title-md2 font-bold text-black dark:text-white">
                Chart
              </h2>

              <nav>
                <ol class="flex items-center gap-2">
                  <li>
                    <a class="font-medium" href="{{route('home')}}">Dashboard /</a>
                  </li>
                  <li class="font-medium text-primary">Chart</li>
                </ol>
              </nav>
            </div>
            <!-- Breadcrumb End -->

            <div class="grid grid-cols-12 gap-4 md:gap-6 2xl:gap-7.5">
              <!-- ====== Chart Four Start -->
              <div class="col-span-12">
                @include('components.partials.chart-04')
              </div>
              <!-- ====== Chart Four End -->

              <!-- ====== Chart One Start -->
             
              @include('components.partials.chart-01')
              <!-- ====== Chart One End -->

              <!-- ====== Chart Two Start -->
              @include('components.partials.chart-02')
              <!-- ====== Chart Two End -->

              <!-- ====== Chart Three Start -->
              @include('components.partials.chart-03')
              <!-- ====== Chart Three End -->
            </div>
          </div>
        </main>
        <!-- ===== Main Content End ===== -->
    
</x-layout>
