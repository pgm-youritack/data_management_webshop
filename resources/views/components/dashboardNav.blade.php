    <ul class="dashboardNavigation">
        <li class="{{Request::is('dashboard/products')?'dashboardactive':'';}} dashboardNavigation__item">
            <a href="{{url('/dashboard/products')}}">all products</a>
        </li>
        <li class="{{Request::is('/dashboard/newProduct')?'dashboardactive':'';}} dashboardNavigation__item">
            <a href="{{url('/dashboard/addProduct')}}">add new product</a>
        </li>
        <li class="{{Request::is('/dashboard/addProductTag')?'dashboardactive':'';}} dashboardNavigation__item">
            <a href="{{url('/dashboard/addProductTag')}}">add new tag</a>
        </li>
        <li class="{{Request::is('/dashboard/users')?'dashboardactive':'';}} dashboardNavigation__item">
            <a href="{{url('')}}">all users</a>
        </li>







         <li class="dashboardNavigation__item ">
                <a href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </li>
    </ul>