<div class="row">
    <div class="col-xs-12">
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
    </div>
</div>
