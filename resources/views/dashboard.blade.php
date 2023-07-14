<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href='{{ asset('css/style.css') }}' type='text/css' rel='stylesheet' />
</head>
<body>
   <div class="container-fluid">
    <div class="row flex-nowrap">
         @include('components.sidebar')

        <div class="col m-0 p-0">

         @include('components.navbar')

         @include('section.cardsection')

         @include('section.projectsection')

         </div>

        </div>
    </div>
</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/bdf0fa7ef4.js" crossorigin="anonymous"></script>
    <script>
        let sidebar = document.getElementById('sidebar');
        let btn = document.getElementById('btn');

        function toggleSidebar(){
           if(sidebar.style.width=='225px'){
            return closeSidebar();
           }
           return openSideBar();

        }

        function openSideBar(){
           sidebar.style.width='225px';
           btn.style.marginLeft = '225px';
        }

        function closeSidebar(){
            sidebar.style.width = '0px';
            btn.style.marginLeft = '0px';
            document.body.style.backgroundColor = 'white';
        }
    </script>
</body>
</html>
