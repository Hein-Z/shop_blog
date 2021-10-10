<div class="d-flex flex-column text-md-right">
    <div class="d-flex flex-md-column flex-wrap justify-content-start text-left">
        <a class="pt-1  h5 px-1 px-md-0
               {{\Request::route()->getName()==='user.edit'?'text-danger':'text-dark'}}"

           href="{{ route('user.edit') }}">My Profile</a>
        <span class="d-md-none"> | </span>
        <a class="pt-1  h5 px-1 px-md-0
               {{\Request::route()->getName()==='order.index'?'text-danger':'text-dark'}}"
           href="{{ route('order.index') }}">My Orders</a>
    </div>
</div>
