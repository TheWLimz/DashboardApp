  @php
      $card_item = array('Customers' => count($projects), 'Projects' => count($projects), 'Completion Rate' => '75%');

  @endphp

  <div class="container-fluid p-4 overflow-hidden">
      <div class="row gx-2 gy-4">
          @foreach ($card_item as $key => $value)
              <div class="col col-md-4 col-sm-4 col-xs-4">
                  <div class="card text-white {{ $key === 'Customers' ? 'bg-success' : ($key === 'Projects' ? 'bg-info' : 'bg-primary')}}" style="width: 15rem; height:10rem;">
                      <div class="card-body d-flex flex-column gap-2">
                          <h2 class="card-subtitle mb-2">
                              {{ $value }}
                              <i class="{{ $key === 'Customers' ? 'fa-solid fa-person' : ($key === 'Projects' ? "fs-4 fa-solid fa-table" : 'fa-solid fa-gauge fs-4')}}"></i>
                          </h2>
                          <h5 class="card-text">{{ $key }}</h5>
                      </div>
                  </div>
              </div>
              @endforeach
      </div>
