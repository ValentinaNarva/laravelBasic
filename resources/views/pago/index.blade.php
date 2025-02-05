<link rel="stylesheet" href="CSS/style.css">

<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<body>
<main class="table">
    <section class="table__header">
        <h1>Registros</h1>
        <div class="input-group">
            <input type="search" placeholder="Search Data...">
            <i class='bx bx-search-alt'></i>
        </div>
        <div class="export__file">
            <a href="{{route('home')}}"><label for="export-file" class="export__file-btn" title="Export File"></label></a>

        </div>
    </section>
    <section class="table__body">
        <table>
            <thead>
                <tr>
                    <th> Id <span class="icon-arrow">&UpArrow;</span></th>
                    <th> idPedido<span class="icon-arrow">&UpArrow;</span></th>
                    <th> idFormaDePago<span class="icon-arrow">&UpArrow;</span></th>
              
                  
                </tr>
            </thead>
            @foreach ($pago as $pagos)
            <tbody>
                <tr>
                    <td>{{$pagos->id}} </td>
                    <td>{{$pagos->idPedido}}</td>
                    <td>{{$pagos->idFormaDePago}}</td>
                   
                    <td>
                     <a href="{{route('pagos.create')}}"><p class="status delivered">Agregar </p></a>
                    </td>

            </tbody>
            @endforeach</td>
        </table>
    </section>
</main>
</body>

