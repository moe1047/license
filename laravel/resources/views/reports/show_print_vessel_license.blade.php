@extends('print_layout')

@section('content')
    <div class="container">
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
               

                <div class="panel panel-default" >
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12 col-xs-12">
                                <table class="table table-bordered ">
                                    <tr>
                                        <td colspan="3"><b>License No. </b> {{$renewal->vesselLicense->licenseNo}}</td>
                                        <td><b>Date of the Validity of License</b></td>
                                        <td><b>From:</b>{{$renewal->date}}<br></td>
                                        <td><b>To:</b>{{$renewal->expire_date}}<br></td>
                                    </tr>

                                </table>
                            </div>
                            <div class="col-md-6 col-xs-6">
                                <table class="table table-bordered " style="margin:2px">
                                    <tbody>
                                    <tr>
                                        <td colspan="2" class="text-center"><b>A. Vessel Details</b></td>
                                    </tr>
                                    <tr>
                                        <td><b>Vessel Name</b></td><td>{{$renewal->vesselLicense->vesselName}}</td>
                                    </tr>
                                    <tr>
                                        <td><b>Nationality /Flag Carrier</b></td><td>{{$renewal->vesselLicense->nationality}}</td>
                                    </tr>

                                    <tr>
                                        <td><b>Port/country Registered</b></td><td>{{$renewal->vesselLicense->countryRegistered}}</td>
                                    </tr>

                                    <tr>
                                        <td><b>Vessel Registration No.</b></td><td>{{$renewal->vesselLicense->vesselRegNo}}</td>
                                    </tr>

                                    <tr>
                                        <td><b>length/Breadth/Depth</b></td><td>{{$renewal->vesselLicense->lengthBreadthDepth}}</td>
                                    </tr>

                                    <tr>
                                        <td><b>Tonnage GRT/NRT </b></td><td>{{$renewal->vesselLicense->tonnage}}</td>
                                    </tr>

                                    <tr>
                                        <td><b>Engine Type & Power</b></td><td>{{$renewal->vesselLicense->engineType}}</td>
                                    </tr>

                                    <tr>
                                        <td><b>Number of Crew and Fisherman on Board</b></td><td>{{$renewal->vesselLicense->noOfCrew}}</td>
                                    </tr>

                                    <tr>
                                        <td><b>Other craft on Board</b></td><td>{{$renewal->vesselLicense->otherCraftOnBoard}}</td>
                                    </tr>

                                    <tr>
                                        <td><b>Year of Construction</b></td><td>{{$renewal->vesselLicense->yearOfConstruction}}</td>
                                    </tr>

                                    <tr>
                                        <td><b>Landing & Transshipping Port</b></td><td>{{$renewal->vesselLicense->landingAndTransshippingPort}}</td>
                                    </tr>

                                    <tr>
                                        <td><b>Cold Storage Capacity</b></td><td>{{$renewal->vesselLicense->coldStorageCapacity}}</td>
                                    </tr>

                                    <tr>
                                        <td><b>Processing Methods</b></td><td>{{$renewal->vesselLicense->processingMethods}}</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" class="text-center"><b>B. Species to be Fished</b></td>
                                    </tr>

                                    <tr>
                                        <td><b>Species to be Fished</b></td><td>{{$renewal->vesselLicense->speciesToBeFished}}</td>
                                    </tr>

                                    <tr>
                                        <td><b>Quantity Permitted </b></td><td>{{$renewal->vesselLicense->quantityPermitted}}</td>
                                    </tr>

                                    <tr>
                                        <td><b>Types of fishing Gear </b></td><td>{{$renewal->vesselLicense->typesOfFishingGear}}</td>
                                    </tr>

                                    <tr>
                                        <td><b>Area of Fishing</b></td><td>{{$renewal->vesselLicense->areaOfFishing}}</td>
                                    </tr>

                                    <tr>
                                        <td><b>Reporting Details</b></td><td>{{$renewal->vesselLicense->reportingDetails}}</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" class="text-center"><b>B. Vessel Owners and Agent Details</b></td>
                                    </tr>

                                    <tr>
                                        <td><b>Owner</b></td><td>{{$renewal->vesselLicense->owner}}</td>
                                    </tr>

                                    <tr>
                                        <td><b>Address</b></td><td>{{$renewal->vesselLicense->address}}</td>
                                    </tr>
                                    <tr>
                                        <td><b>Tel</b></td><td>{{$renewal->vesselLicense->tell}}</td>
                                    </tr>
                                    <tr>
                                        <td><b>Fax</b></td><td>{{$renewal->vesselLicense->fax}}</td>
                                    </tr>
                                    <tr>
                                        <td><b>Email</b></td><td>{{$renewal->vesselLicense->email}}</td>
                                    </tr>
                                    <tr>
                                        <td><b>Agent</b></td><td>{{$renewal->vesselLicense->agent}}</td>
                                    </tr>
                                    <tr>
                                        <td><b>Address</b></td><td>{{$renewal->vesselLicense->agentAddress}}</td>
                                    </tr>
                                    <tr>
                                        <td><b>Tel</b></td><td>{{$renewal->vesselLicense->agentTell}}</td>
                                    </tr>
                                    <tr>
                                        <td><b>Fax</b></td><td>{{$renewal->vesselLicense->agentFax}}</td>
                                    </tr>
                                    <tr>
                                        <td><b>Email</b></td><td>{{$renewal->vesselLicense->agentEmail}}</td>
                                    </tr>




                                    </tbody>
                                </table>
                            </div>
                            <div class="col-md-6 col-xs-6">
                                <table class="table table-bordered " style="margin:2px">
                                    <tbody>
                                    <tr>
                                        <td colspan="2" class="text-center"><b>D. Vessel Radio Communication</b></td>
                                    </tr>
                                    <tr>
                                        <td><b>International Call Sign</b></td><td>{{$renewal->vesselLicense->internationalCallSign}}</td>
                                    </tr>
                                    <tr>
                                        <td><b>Normal Transmitting Frequencies</b></td><td>{{$renewal->vesselLicense->normalTransmittingFrequencies}}</td>
                                    </tr>

                                    <tr>
                                        <td><b>GPS</b></td><td>{{$renewal->vesselLicense->GPS}}</td>
                                    </tr>

                                    <tr>
                                        <td><b>Type of Equipment.</b></td><td>{{$renewal->vesselLicense->typeOfEquipment}}</td>
                                    </tr>

                                    <tr>
                                        <td><b>Transponders</b></td><td>{{$renewal->vesselLicense->Transponders}}</td>
                                    </tr>

                                    <tr>
                                        <td><b>Type </b></td><td>{{$renewal->vesselLicense->type}}</td>
                                    </tr>

                                    <tr>
                                        <td><b>Identifying Code</b></td><td>{{$renewal->vesselLicense->identifyingCode}}</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" class="text-center"><b>E. Position of Determination Equibment</b></td>
                                    </tr>

                                    <tr>
                                        <td><b>Loren</b></td><td>{{$renewal->vesselLicense->loren}}</td>
                                    </tr>

                                    <tr>
                                        <td><b>OMEGA</b></td><td>{{$renewal->vesselLicense->omega}}</td>
                                    </tr>
                                    <tr>
                                        <td><b>DECCA</b></td><td>{{$renewal->vesselLicense->decca}}</td>
                                    </tr>
                                    <tr>
                                        <td><b>GPS</b></td><td>{{$renewal->vesselLicense->GPS}}</td>
                                    </tr>
                                    <tr>
                                        <td><b>Other equipment</b></td><td>{{$renewal->vesselLicense->otherEquipment}}</td>
                                    </tr>
                                    <tr>
                                        <td><b>ADIO BUOYS</b></td><td>{{$renewal->vesselLicense->adioBuoys}}</td>
                                    </tr>
                                    <tr>
                                        <td><b>EPIRB's</b></td><td>{{$renewal->vesselLicense->epirbs}}</td>
                                    </tr>
                                    </tbody>
                                </table>
                                <h4>Signed By:</h4>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')

@endsection
