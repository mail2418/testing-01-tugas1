@extends('theme.theme')
@section('footer')
<footer class="footer">
    <div class=" container-fluid ">
        <div class="copyright" id="copyright">
            &copy;
            <script>
                document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
            </script>
            <a href="{{url('')}}">Nikita futsal</a>
        </div>
    </div>
</footer>
    
@endsection
