@php
$id = Auth::user()->id;
$verdorId = App\Models\User::find($id);
$status = $verdorId->status;
@endphp

@if($status === 'active')


   <!-- Sidebar-->
            <aside class="col-lg-4 pe-xl-5">
                <!-- Account menu toggler (hidden on screens larger 992px)-->
                <div class="d-block d-lg-none p-4"><a class="btn btn-outline-accent d-block" href="#account-menu" data-bs-toggle="collapse"><i class="ci-menu me-2"></i>Account menu</a></div>
                <!-- Actual menu-->
                <div class="h-100 border-end mb-2">
                  <div class="d-lg-block collapse" id="account-menu">

                    <div class="bg-secondary p-4">
                      <h3 class="fs-sm mb-0 text-muted">Seller Dashboard</h3>
                    </div>

                    @php
                        $productCount = App\Models\Product::where('vendor_id', $id)->count();
                    @endphp

                    <ul class="list-unstyled mb-0">
                      <li class="border-bottom mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3 active" href="dashboard-sales.html"><i class="ci-money-bag opacity-60 me-2"></i>Sales<span class="fs-sm text-muted ms-auto">₱1,375.00</span></a></li>
                      <li class="border-bottom mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3" href="{{ route('vendor.all.product') }}"><i class="ci-package opacity-60 me-2"></i>Products<span class="fs-sm text-muted ms-auto">{{ $productCount }}</span></a></li>
                      <li class="border-bottom mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3" href="{{ route('vendor.add.product') }}"><i class="ci-cloud-upload opacity-60 me-2"></i>Add New Product</a></li>
                      <li class="mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3" href="dashboard-payouts.html"><i class="ci-currency-exchange opacity-60 me-2"></i>Payouts</a></li>

                    </ul>
                    <div class="bg-secondary p-4">
                        <h3 class="fs-sm mb-0 text-muted">Account</h3>
                      </div>
                      <ul class="list-unstyled mb-0">
                        <li class="border-bottom mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3" href="{{ route('vendor.profile') }}"><i class="ci-settings opacity-60 me-2"></i>Profile Settings</a></li>
                        <li class="border-bottom mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3" href="{{ route('vendor.change.password') }}"><i class="ci-security-check opacity-60 me-2"></i>Change Password</a></li>
                        {{-- <li class="border-bottom"><a class="nav-link-style d-flex align-items-center px-4 py-3" href="{{ route('inactive.vendor') }}"><i class="ci-heart opacity-60 me-2"></i>View Inactive Vendors<span class="fs-sm text-muted ms-auto"></span></a></li>
                        <li class="border-bottom"><a class="nav-link-style d-flex align-items-center px-4 py-3" href="{{ route('active.vendor') }}"><i class="ci-heart opacity-60 me-2"></i>View Active Vendors<span class="fs-sm text-muted ms-auto"></span></a></li> --}}
                        <li class="mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3" href="{{ route('vendor.logout') }}"><i class="ci-sign-out opacity-60 me-2"></i>Sign out</a></li>
                      </ul>
                    <hr>
                  </div>
                </div>
              </aside>


        @else




        @endif



