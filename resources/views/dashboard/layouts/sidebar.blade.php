<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="{{ route('dashboard.index') }}" class="app-brand-link">
            <span class="app-brand-text demo menu-text fw-bold">كتاب</span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
            <i class="ti menu-toggle-icon d-none d-xl-block ti-sm align-middle"></i>
            <i class="ti ti-x d-block d-xl-none ti-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Page -->
        <li class="menu-item">
            <a href="{{ route('dashboard.index') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-dashboard"></i>
                <div>لوحه التحكم</div>
            </a>
        </li>

        <li class="menu-item">
            <a href="{{ route('dashboard.category.index') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-category"></i>
                <div>الاقسام</div>
            </a>
        </li>

        <li class="menu-item">
            <a href="{{ route('dashboard.book.index') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-books"></i>
                <div>الكتب</div>
            </a>
        </li>

        <li class="menu-item">
            <a href="{{ route('dashboard.contact.index') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-messages"></i>
                <div>التواصل</div>
            </a>
        </li>
    </ul>
</aside>
