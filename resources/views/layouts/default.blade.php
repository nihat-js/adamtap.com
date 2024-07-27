<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Adamtap.com</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    body {
      background-color: #f4f6f8;
    }

    .loading-overlay {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(255, 255, 255, 0.8);
      display: none;
      /* Hidden by default */
      align-items: center;
      justify-content: center;
      z-index: 9999;
      /* Ensure it's on top of other elements */
    }

    .spinner {
      border: 16px solid #f3f3f3;
      /* Light grey */
      border-top: 16px solid #3498db;
      /* Blue */
      border-radius: 50%;
      width: 120px;
      height: 120px;
      animation: spin 2s linear infinite;
    }

    @keyframes spin {
      0% {
        transform: rotate(0deg);
      }

      100% {
        transform: rotate(360deg);
      }
    }
  </style>
</head>

<body>

  <div class="loading-overlay" id="loading-overlay">
    <div class="spinner"></div>
  </div>
  <div class="container">
    @yield('container')
  </div>


  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
    crossorigin="anonymous"></script>
  </script>
  <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
  <script>
    const globals = {

    }
    const select = function (query) { return document.querySelector(query) }
    const selectAll = function (query) { return document.querySelectorAll(query) }

    function delegateEvent(eventType, selector, callback) {
      document.body.addEventListener(eventType, function (event) {
        if (event.target.matches(selector)) {
          callback(event);
        }
      });
    }
    function showLoading() {
      document.getElementById('loading-overlay').style.display = 'flex';
    }

    // Function to hide the loading indicator
    function hideLoading() {
      document.getElementById('loading-overlay').style.display = 'none';
    }

    // function Event(eventType,selector,callback){
    //   select
    // }


  </script>
  @yield('scripts')
</body>

</html>