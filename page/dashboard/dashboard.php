<head>
    <link rel="stylesheet" href="././public/style/dashboard/dashboard.css"/>
</head>
<body>
    <div class="container-form-dashboard">
        <div class="container-from-dashboard-left">
            <div>
                <h4><a class="dropdown-item" href="index.php?page=Home" data-target="page-home">PAGE HOME</a></h4>
            </div>
            <div>
                <h4><a class="dropdown-item" href="index.php?page=ACCONUT" data-target="page-acconut">ACCONUT</a></h4>
            </div>
            <div>
                <h4><a class="dropdown-item" href="index.php?page=Home" data-target="page-home">Home</a></h4>
            </div>
            <div>
                <h4><a class="dropdown-item" href="index.php?page=PRODUCT" data-target="page-product">PRODUCT</a></h4>
            </div>
            <div>
                <h4><a class="dropdown-item" href="index.php?page=Hepl" data-target="page-help">Help</a></h4>
            </div>
            <div>
                <h4><a class="dropdown-item" href="index.php?page=SUBACCONUT" data-target="page-sub-acconut">SUB ACCONUT</a></h4>
            </div>
            <div>
                <h4><a class="dropdown-item" href="././DeleteCookie.php" data-target="page-logout">Log Out</a></h4>
            </div>
        </div>

        <div class="container-from-dashboard-right">
           <div id="content-placeholder"></div>
           <div></div>
           <div></div>
           <div></div>
           <div></div>
           <div></div>
        </div>
    </div>

    <script>
        const links = document.querySelectorAll('.dropdown-item');
        const contentPlaceholder = document.getElementById('content-placeholder');

        links.forEach(link => {
            link.addEventListener('click', (event) => {
                event.preventDefault();
                const target = link.getAttribute('data-target');
                const href = link.getAttribute('href');

                // Extract the page parameter from the href URL
                const urlParams = new URLSearchParams(href.substring(href.indexOf('?') + 1));
                const pageParam = urlParams.get('page');

                // You can use AJAX or fetch to load the content dynamically based on the target
                // and replace the contentPlaceholder with the loaded content.
                // Example using fetch:
                fetch(`./page/dashboard/${pageParam}.php`)
                    .then(response => response.text())
                    .then(data => {
                        contentPlaceholder.innerHTML = data;
                    })
                    .catch(error => {
                        console.error(error);
                    });
            });
        });
    </script>
</body>
