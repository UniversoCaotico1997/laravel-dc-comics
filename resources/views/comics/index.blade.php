<!-- Styles -->
@vite('resources/js/app.js')

@include('partials.header')
<main class="pt-5">
    <div class="container">
        <div class="table-responsive">
            <table class="table table-striped
    table-hover	
    table-borderless
    table-primary
    align-middle">
                <thead class="table-light">
                    <tr>
                        <th>Id</th>
                        <th>title</th>
                        <th>description</th>
                        <th>thumb</th>
                        <th>price</th>
                        <th>series</th>
                        <th>sale_date</th>
                        <th>type</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    @foreach($comics as $comic)
                    <tr class="table-primary">
                        <td scope="row">{{$comic->id}}</td>
                        <td>{{$comic->title}}</td>
                        <td>{{$comic->description}}</td>
                        <td><img src="{{$comic->thumb}}" alt=""></td>
                        <td>{{$comic->price}}</td>
                        <td>{{$comic->series}}</td>
                        <td>{{$comic->sale_date}}</td>
                        <td>{{$comic->type}}</td>
                        @endforeach
                    </tr>
                </tbody>
                <tfoot>

                </tfoot>
            </table>
        </div>

    </div>
    <!-- /.container -->

</main>
@include('partials.footer')