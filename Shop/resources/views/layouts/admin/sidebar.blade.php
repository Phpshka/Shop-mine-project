@auth
<div class="sidebar">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red"
  -->
    <div class="sidebar-wrapper">

        <div class="logo">
            <a href="javascript:void(0)" class="simple-text logo-mini">
                CT
            </a>
            <a href="javascript:void(0)" class="simple-text logo-normal">
               IBN SERVICE
            </a>
        </div>
        <ul class="nav">
            <li class="">
                <a href="{{route('admin.index')}}">
                    <i class="tim-icons icon-chart-pie-36"></i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li>
                <a href="{{route('admin.categories')}}">
                    <i class="tim-icons icon-bullet-list-67"></i>
                    <p>Category</p>
                </a>
            </li>
            <li>
                <a href="{{route('admin.brands')}}">
                    <i class="tim-icons icon-support-17"></i>
                    <p>Brand</p>
                </a>
            </li>
            <li>
                <a href="{{route('admin.items')}}">
                    <i class="tim-icons icon-align-center"></i>
                    <p>Products</p>
                </a>
            </li>
            <li>
                <a href="{{route('admin.news')}}">
                    <i class="tim-icons icon-send"></i>
                    <p>News</p>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.password.edit') }}">
                    <i class="tim-icons icon-single-02"></i>
                    <p>User profile</p>
                </a>
            </li>
        </ul>
    </div>
</div>
@endauth
