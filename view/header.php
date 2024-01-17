<!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Magic Eden-like Website</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
    <link rel="stylesheet" href="./content/css/header.css">
  <style>
    /* CSS cho menu */
    @media (max-width: 768px) {
    .search-bar {
      margin: 0;
    }
  }
  .top-section {
  display: flex;
  justify-content: space-between; 
  align-items: center;
}
.header-button, .header-buttonSale, .dropdown {
  margin: 0 10px; 
  text-decoration: none;
}
  .header-button, .header-buttonSale {
  background-color: #f4f4f4; 
  color: black;
  padding: 12px 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
  transition: background-color 0.3s, color 0.3s; /
}

.header-button:hover, .header-buttonSale:hover, .dropbtn:hover {
  background-color: #f4f4f4; 
  color: brown; 
}
.dropdown {
  position: relative;
  display: inline-block;
}
.dropbtn {
  background-color: #f4f4f4; 
  color: black;  
  padding: 12px 16px;
  font-size: 16px;
  border: none;   
  cursor: pointer;
  border-radius: 5px;  
  transition: background-color 0.3s, color 0.3s;

}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #fff;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
  z-index: 1; 
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}
.dropdown-content a:hover {
  background-color: #f1f1f1;
}

.dropdown:hover .dropdown-content {
  display: block;
}
#site-header {
  position: fixed;
  top: 0;
  width: 100%;
  background-color: white;
  z-index: 1000; 
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); 
}


  </style>
  </head>
  <body>

    <header id="site-header">
          <div class="top-section">
              <div class="logo">
                  <img src="./content/css/logo.jpg" alt="Logo">
                </div>
              <a href="index.html" class="header-button">Trang chủ</a>
              <div class="dropdown">
                  <button class="dropbtn">Car Company</button>
                  <div class="dropdown-content">
                    <a href="#"> BMW</a>
                    <a href="#">Mercedes</a>
                    <a href="#">Porsche</a>
                    <a href="#">Audi</a>
                    <a href="#">Maserati</a>
                  </div>
              </div>
              <a href="sale.html" class="header-button">Sale</a>
              <div class="search-bar" style ="margin : 0px;">
                  <div class="input-container">
                    <form action="search.php" method="GET">
                      <input type="text" class="search-input" name="query" placeholder="Tìm kiếm sản phẩm...">
                      <button class="search-button">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                          <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
                        </svg>
                      </button>
                    </form>
                  </div>
            </div>
            <div class="cart">
              <a href="cart.html"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart2" viewBox="0 0 16 16">
              <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5M3.14 5l1.25 5h8.22l1.25-5zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0m9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0"/>
            </svg></i></a>
            </div>
              <div class="user-icons">
                  <a href="index.php?action=dangki"  id="dangki">
                    <!-- <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0z"/>
                        <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
                    </svg> -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                    <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
                    </svg>
                    </a>
              </div>
            </div>
    </header>
  
    <div   id="carouselExample" class="carousel slide">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="./content/css/car1.jpg" class="d-block w-100" style ="height: 500px" alt="...">
    </div>
    <div class="carousel-item">
      <img src="./content/css/car2.jpg" class="d-block w-100" style ="height: 500px" alt="...">
    </div>
    <div class="carousel-item">
      <img src="./content/css/car3.jpg" class="d-block w-100"  style ="height: 500px" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
 
      
  <script>
    
    function timKiemSanPham() {
      // Logic for product search
    }
  </script>

   
  
    
 
  </body>
  </html>
