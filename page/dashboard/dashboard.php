
<head>
    <link rel="stylesheet" href="././public/style/dashboard/dashboard.css"/>
</head>
<body>
    <div class="container-form-dashboard">
        <div class="container-from-dashboard-left">
            <div>
                <h4><a class="dropdown-item" href="http://localhost/shopping/index.php?page=Home" data-target="page-home">PAGE HOME</a></h4>
            </div>
            <div>
                <h4><a class="dropdown-item" href="index.php?page=pageACCONUT" data-target="page-acconut">ACCONUT</a></h4>
            </div>
            <div>
                <h4><a class="dropdown-item" href="index.php?page=pageHome" data-target="page-home">Home</a></h4>
            </div>
            <div>
                <h4><a class="dropdown-item" href="index.php?page=pagePRODUCT" data-target="page-product">PRODUCT</a></h4>
            </div>
            <div>
                <h4><a class="dropdown-item" href="index.php?page=pageHepl" data-target="page-help">Help</a></h4>
            </div>
            <div>
                <h4><a class="dropdown-item" href="index.php?page=pageSUBACCONUT" data-target="page-sub-acconut">SUB ACCONUT</a></h4>
            </div>
            <div>
                <h4><a class="dropdown-item" href="index.php?page=pageSetting" data-target="page-Setting">Setting</a></h4>
            </div>
            <div>
                <h4><a id="logout-link" class="dropdown-item" href="./DeleteCookie.php">Log Out</a></h4>
            </div>
        </div>

        <div class="container-from-dashboard-right">
            <div id="content-placeholder"></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <script>
    const logoutLink = document.getElementById('logout-link');

    logoutLink.addEventListener('click', (event) => {
        event.preventDefault();

        const confirmLogout = confirm('Bạn chắc chắn muốn thoát?');

        if (confirmLogout) {
            document.cookie = "user_email=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
            document.cookie = "user_type=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
            window.location.href = logoutLink.getAttribute('href');
        }
    });
</script>
    <script>
        const links = document.querySelectorAll('.dropdown-item');
        const contentPlaceholder = document.getElementById('content-placeholder');

        links.forEach(link => {
            link.addEventListener('click', (event) => {
                event.preventDefault();
                const href = link.getAttribute('href');
                const urlParams = new URLSearchParams(href.substring(href.indexOf('?') + 1));
                const pageParam = urlParams.get('page');

                if (pageParam === 'Home') {
                    window.location.href = 'http://localhost/shopping/index.php?page=Home';
                } else if (pageParam === 'Profile') {
                    window.location.href = 'http://localhost/shopping/index.php?page=Profile';
                } else if (pageParam === 'Product') {
                    window.location.href = 'http://localhost/shopping/index.php?page=Product';
                } else if (pageParam === 'dashboard') {
                    window.location.href = 'http://localhost/shopping/index.php?page=dashboard';
                } else if (pageParam === 'logout') {
                    const confirmLogout = confirm('Bạn chắc chắn muốn thoát?');
                    if (confirmLogout) {
                        document.cookie = "user_email=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
                        document.cookie = "user_type=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
                        window.location.href = './DeleteCookie.php';
                    }else {
                    fetch(`./page/dashboard/${pageParam}.php`)
                        .then(response => response.text())
                        .then(data => {
                            contentPlaceholder.innerHTML = data;
                        })
                        .catch(error => {
                            console.error(error);
                        });
                }
            });
        });
    </script>
</body>
