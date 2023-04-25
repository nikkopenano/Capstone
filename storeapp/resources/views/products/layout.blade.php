<!DOCTYPE html>
<html>
<head>    
    <title>StoreShop Products record</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!--Bootstrap5 CDN-->    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
</head>
<body>  
    <div class="container-fluid">
       <div class="row flex-nowrap">
            <div class="bg-2 col-2 col-md-2 col-lg-2 min-vh-100 d-flex flex-column justify-content-between">               
            <div class="bg-2 p-2">
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                <svg class="bi pe-none me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>                
                <span class="fs-4" style="color: rgb(8, 8, 8);">StoreShop</span>
                </a>
                <hr>
                <ul class="nav nav-pills flex-column mb-auto">
                    <li class="nav-item">
                    <a href="/" class="nav-link link-body-emphasis">                    
                    <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
                    Dashboard
                    </a>
                    </li>
                    <li>
                    <a href="/customer" class="nav-link link-body-emphasis">
                      
                    <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#table"></use></svg>
                    Customers
                    </a>
                    </li>
                    <li>
                    <a href="/employee" class="nav-link link-body-emphasis">
                    <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#grid"></use></svg>
                    Employee
                    </a>
                    </li>
                    <li>
                    <a href="/product" class="nav-link active" aria-current="page">
                    <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#people-circle"></use></svg>
                    Products
                    </a>
                    </li>
                    <li>
                    <a href="/order" class="nav-link link-body-emphasis">
                    <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#people-circle"></use></svg>
                    Orders
                    </a>
                    </li>

                </ul>
            </div>  
        </div>
        <div class="col-10">
            @yield('content')
        </div>  
    </div> 
    </div>  
</body>
</html>