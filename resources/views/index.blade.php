<x-navbar send="{{ $name }}"/>
@include('components.home');

@csrf

<script>
    let name = @json($name);
    console.log(name);
</script>

 