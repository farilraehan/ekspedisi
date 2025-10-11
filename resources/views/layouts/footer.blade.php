<style>
    .footer {
        background: none !important;
        /* hilangkan warna putih */
        border: none !important;
        /* hilangkan garis */
        box-shadow: none !important;
        /* hilangkan efek bayangan */
        padding: 5px 0 !important;
        /* kecilkan padding supaya rapat */
        text-align: center;
        /* kalau mau tulisan di tengah */
    }

    .footer .nav {
        display: inline-flex;
        /* biar list sejajar */
        gap: 15px;
        /* jarak antar link */
    }
</style>
<footer class="footer">
    <div class="container-fluid d-flex align-items-center justify-content-between">
        <nav>
            <ul class="nav" style="list-style:none; margin:0;">
                <li class="nav-item">
                    <a style="color:#aaa9a9; text-decoration:none; font-weight:500; margin-left: 20px;">
                        {{ date('Y') }} © Desain
                    </a>
                </li>
            </ul>
        </nav>

        <div class="copyright" style="color:#aaa9a9; font-weight:500; margin-right: 20px;">
            Made with <i class="fa fa-heart heart text-danger"></i> by Asta Brata Technology
        </div>
    </div>
</footer>
