<div class="row">
    <div class="col-xs-12">
        @if(count($list))
            <h3>Closest vehicle match from our records</h3>
            <table class="table table-hover">
                @foreach($list as $vehicule)
                    <tr>
                        <td>
                            {{$vehicule->Manufacturerttxt}} {{$vehicule->Modeltxt}} {{$vehicule->Variant}} ({{$vehicule->ModelYear}}) - {{\number_format($vehicule->Price,0,",",".")." DKK"}}
                        </td>
                    </tr>
                @endforeach
            </table>
        @else
            <p class="text-center h3">We haven't found any matches in our database.</p>
        @endif
    </div>
</div>
