@role('super_admin|seller')
    <li class="nav-item">
        <a href="{{ route('product_category.index') }}" class="nav-link {{ Request::is('admin/product-category*') ? 'active' : '' }}">
            <i class="nav-icon fas fa-th"></i>
            <p>Product Category</p>
        </a>
    </li>
@endrole