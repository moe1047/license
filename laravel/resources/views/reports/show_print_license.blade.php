@extends('print_layout')

@section('content')
    <div class="container" ng-app="myApp" ng-init="capitals=[{'state':'HRG'},{'state':'TOG'},{'state':'AW'},{'state':'SAX'}]">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default" style="margin-bottom:3px">
                    <div class="panel-body" style="padding:2px">
                        <div >
                            <div style="margin-top:15px;margin-left:1px;float:left;padding-right: 30px;text-align:center;font-family: Times New Roman, Times, serif;">
                                <h3>DOWLADDA PUNTLAND <br> EE SOMALIA</h3>
                            </div>
                            <div style="margin-top:5px;margin-left:6%;margin-bottom:1%;float:left">
                                <img src="{{asset('css/logo2.png')}}" class="img img-rounded" width="170" height="120">
                            </div>
                            <div style="margin-top:15px;margin-right:1px;float:right;text-align:center;font-family: Times New Roman, Times, serif;">
                                <h3>PUNTLAND STATE OF <br> SOMALIA</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default" >
                    <div class="panel-body" style="">
                        <h5 style="display: inline;float: left"><b>REF:</b>WKKHB</h5>
                        <h5  style="display: inline;float: right" class="text-center"><b>Date:</b> {{\Carbon\Carbon::today()->format('d/m/Y')}}</h5>

                    </div>
                </div>
                <h3 STYLE="text-align: center"><b>RUQSADA KAGANACSIGA KALLUUNKA EE WADANIGA AH <br>{{$renewal->license->type=="local"?"LOCAL":"FOREIGN"}} FISH TRADE LICENSE.</b></h3>
                <h5 STYLE="text-align: center">Ministery of Fisheries and Marine Resource has granted this fish trader license
                        to the {{$renewal->license->type=="local"?"local":"foreign"}} company whose<br> specifications are listed below:</h5><hr>
                <div class="panel panel-default" >
                    <div class="panel-body">
                        <table class="table table-bordered" style="margin:2px">
                            <tbody>
                            <tr>
                                <td><b>1. MAGACA SHIRKADDA<br>(Name of the Company)</b></td><td>{{$renewal->license->business_name}}</td>
                            </tr>

                            <tr>
                                <td><b>2. Liisan Lambar<br>(License No.) </b></td><td>{{$renewal->license->serial}}</td>
                            </tr>

                            <tr>
                                <td><b>3. Goobta<br>(Location)</b></td><td>{{$renewal->license->operation_site}}</td>

                            </tr>
                            <tr>
                                <td><b>4. Qaabka shirkadda kalluumaysiga ugu jirto<br>(Their involvement in Fisheries)</b></td>
                                <td>
                                    @foreach($renewal->license->businessTypes as $businessType)
                                        {{$businessType->name}}<br>
                                    @endforeach
                                </td>
                            </tr>
                            <tr>
                                <td><b>5. Meesha ay ka kalluumaysanayso<br>(Area of operation)</b></td><td>{{$renewal->license->operation_site}}</td>
                            </tr>
                            <tr>
                                <td><b>6. Xadiga kalluunka uu qabsanayo Sanadkii <br>(Fish Quantities cached yearly)</b></td><td>{{$renewal->license->fish_quantities_cached_yearly}}</td>
                            </tr>
                            <tr>
                                <td><b>7. Noocyada kallunka ay qabsanayso <br>(Type of Exploited Fishes)</b></td><td>{{$renewal->license->type_of_exploited_fishes}}</td>

                            </tr>
                            <tr>
                                <td><b>8. Habka Daryeelka kalluunka<br> (Processing Method)</b></td><td>{{$renewal->license->processing_method}}</td>

                            </tr>
                            <tr>
                                <td><b>9. Tirada Doonyaha / Laashka Shirkaddu leedahay <br>(Number of their Fishing boats)</b></td><td>{{$renewal->license->no_of_fishing_boats}}</td>

                            </tr>
                            <tr>
                                <td><b>10. Jumlad/Tafaariiq</b></td><td>{{$renewal->license->selling_type}}</td>

                            </tr>

                            </tbody>
                        </table>


                    </div>
                </div>
                <h5 STYLE="text-align: center">This license is valid for one callender year 2016<br>
                    This license is requested to observe the state fishiries law(s) regulations,degrees and orders issued to this license
                    by the ministery of fisheries and marine resources or any other conditions to which the license is subjected to
                    .the license is also requested to pay the custom duties of the exported fish on every fishing trip</h5><hr>

            </div>
        </div>
    </div>
@endsection
@section('scripts')

@endsection
