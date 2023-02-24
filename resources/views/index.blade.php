<x-navbar send="{{ $name }}"/>
@include('components.home');

<script>
    let name = @json($name);
    console.log(name);
</script>

 