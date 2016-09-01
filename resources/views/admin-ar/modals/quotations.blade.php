<div class="modal fade " id="modal-qutations" tabindex="-1" role="dialog" aria-labelledby="modal-quta">
    <div class="modal-dialog modal-width-80" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="gridSystemModalLabel">Qutation</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-2">
                        <section class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">Direction</h4>
                            </div>
                            <div class="panel-body">
                                <label class="import">
                                    <input type="radio" name="Direction" id="" autocomplete="off" value="" checked> 
                                    <i class="fa fa-arrow-circle-down import-icon-style"></i>
                                    &nbsp;Import
                                </label>
                                <br>
                                <label class="export">
                                    <input type="radio" name="Direction" id="" autocomplete="off" value=""> 
                                    <i class="fa fa-external-link export-icon-style"></i>
                                    &nbsp;Export
                                </label>
                                <br>
                                <label class="domestic">
                                    <input type="radio" name="Direction" id="" autocomplete="off" value=""> 
                                    <i class="fa fa-home domestic-icon-style"></i>
                                    &nbsp;Domestic
                                </label>
                            </div>
                        </section>

                        <section class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">Transport Type</h4>
                            </div>
                            <div class="panel-body">
                                <label id="transport-ocean" class="trans-type">
                                    <input type="radio" name="Transport Type" id="" autocomplete="off" value="" checked> 
                                    <i class="fa fa-ship ocean-icon-style"></i>
                                    &nbsp;Ocean
                                </label>
                                <br>
                                <label id="transport-air" class="trans-type">
                                    <input type="radio" name="Transport Type" id="" autocomplete="off" value=""> 
                                    <i class="fa fa-plane air-icon-style"></i>
                                    &nbsp;Air
                                </label>
                                <br>
                                <label id="transport-inland" class="trans-type">
                                    <input type="radio" name="Transport Type" id="" autocomplete="off" value=""> 
                                    <i class="fa fa-truck inland-icon-style"></i>
                                    &nbsp;Inland
                                </label>
                            </div>
                        </section>

                        <section class="panel panel-default Shp-type">
                            <div class="panel-heading">
                                <h4 class="panel-title">Ship Type</h4>
                            </div>
                            <div class="panel-body">
                                <div class="type-ocean">
                                    <label class="">
                                        <input type="radio" name="Ship-Type" id="" autocomplete="off" value="" checked> 
                                        &nbsp;FCL
                                    </label>
                                    <br>
                                    <label class="">
                                        <input type="radio" name="Ship-Type" id="" autocomplete="off" value=""> 
                                        &nbsp;LCL
                                    </label>
                                </div>
                                <div class="type-inland hide">
                                    <label class="">
                                        <input type="radio" name="Ship Type" id="" autocomplete="off" value="" checked> 
                                        &nbsp;FTL
                                    </label>
                                    <br>
                                    <label class="">
                                        <input type="radio" name="Ship Type" id="" autocomplete="off" value=""> 
                                        &nbsp;LTL
                                    </label>
                                </div>
                            </div>
                        </section>
                    </div>
                    <div class="col-sm-10">
                        <div class="col-sm-6">
                            <label>Branch</label>
                            <select id="" name="slectBranch" disabled="disabled" class="form-control">
                                <option value="1">Select Branch</option>
                                <option value="2">ALEXANDRIA</option>
                                <option value="3" selected="">CAIRO</option></select>
                        </div>
                        <div class="col-sm-6">
                            <label>Salesman</label>
                            <select id="" name="slectSalesman" class="form-control" >
                                <option value="">Select Salesman</option>
                                <option value="1">ADMIN</option>
                                <option value="2">MOSTAFA</option>
                                <option value="3">MA</option>
                                <option value="4">MOHAMED</option>
                                <option value="5">SHERIF</option>
                                <option value="6">TEST</option></select>
                        </div>
                        <div class="col-sm-6">
                            <label>Open Date</label>
                            <input id="txtOpenDate" type="text" onfocus="DisableEnterKey(id);" onkeypress="DisableEnterKey(id);" readonly="readonly" style="background-color:white; cursor:text;" class="datepicker-input form-control" data-required="true" data-date-format="dd/mm/yyyy" placeholder="Select Date">

                            <!--
                                                                                  <div class="form-group">
                                                                                    <div class="input-group date">
                                                                                        <input type="text" data-provide="datepicker" data-date-end-date="0d" class="form-control date" value="12-02-2012">
                                                                                        <div class="input-group-addon">
                                                                                            <span class="glyphicon glyphicon-th"></span>
                                                                                        </div>
                                                                                    </div>
                                                                                  </div>
                            -->
                        </div>
                        <div class="divShipper form-group col-sm-6 hide">
                            <div class="col-sm-6 inner-col">
                                <label>Shipper</label>
                                <select id="slectShipper" name="slShipper" class="form-control" data-required="true"><option value="">Select Shipper</option>
                                    <option value="">10</option>
                                    <option value="">11</option>
                                    <option value="">22</option>
                                    <option value="">33</option>
                                    <option value="">44</option>
                                    <option value="">55</option>
                                    <option value="">66</option>
                                    <option value="">8</option>
                                    <option value="">9</option>
                                    <option value="">9999</option>
                                    <option value="">AVL GROUP</option>
                                    <option value="">EXPORTER</option>
                                    <option value="">HOME MARKET CO.</option>
                                    <option value="">ISC</option>
                                    <option value="">JEAN CLAUDE FOREST</option></select>
                            </div>
                            <div class="col-sm-4  m-t-md">
                                <button id="" class="btn btn-info btn-md btn-sm-rd" data-toggle="modal" data-target="#ShipperModal"><i class="fa fa-pencil"></i>
                                </button>
                                <button id="" class="btn btn-warning btn-md btn-sm-rd" data-toggle="modal" data-target="#ShipperModal"><i class="fa fa-plus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="divConsignee form-group col-sm-6">
                            <div class="col-sm-6 inner-col">
                                <label>Consignee</label>
                                <select id="slectConsignees" name="slConsignees" class="form-control" data-required="true"><option value="">Select Consignee</option>
                                    <option value="">10</option>
                                    <option value="">11</option>
                                    <option value="">22</option>
                                    <option value="">33</option>
                                    <option value="">44</option>
                                    <option value="">55</option>
                                    <option value="">66</option>
                                    <option value="">8</option>
                                    <option value="">9</option>
                                    <option value="">9999</option>
                                    <option value="">AVL GROUP</option>
                                    <option value="">EXPORTER</option>
                                    <option value="">HOME MARKET CO.</option>
                                    <option value="">ISC</option>
                                    <option value="">JEAN CLAUDE FOREST</option></select>
                            </div>
                            <div class="col-sm-4  m-t-md">
                                <button id="" class="btn btn-warning btn-md btn-sm-rd" data-toggle="modal" data-target="#CustomerModal"><i class="fa fa-plus"></i>
                                </button>
                                <button id="" class="btn btn-info btn-md btn-sm-rd" data-toggle="modal" data-target="#EditCustomerModal"><i class="fa fa-pencil"></i>
                                </button>
                            </div>
                        </div>
                        <div class="form-group col-sm-6">
                            <label>POL Country</label>
                            <select id="" name="slPOLCountries" class="form-control"><option>Select Pol Country</option>
                                <option value="">10</option>
                                <option value="">11</option>
                                <option value="">22</option>
                                <option value="">33</option>
                                <option value="">44</option>
                                <option value="">55</option>
                                <option value="">66</option>
                                <option value="">8</option>
                                <option value="">9</option>
                                <option value="">9999</option>
                                <option value="">AVL GROUP</option>
                                <option value="">EXPORTER</option>
                                <option value="">HOME MARKET CO.</option>
                                <option value="">ISC</option>
                                <option value="">JEAN CLAUDE FOREST</option>
                            </select>
                        </div>
                        <div class="form-group col-sm-6">
                            <label>POD Country</label>
                            <select id="" name="slPODCountries" class="form-control"><option>Select POD Country</option>
                                <option value="">10</option>
                                <option value="">11</option>
                                <option value="">22</option>
                                <option value="">33</option>
                                <option value="">44</option>
                                <option value="">55</option>
                                <option value="">66</option>
                                <option value="">8</option>
                                <option value="">9</option>
                                <option value="">9999</option>
                                <option value="">AVL GROUP</option>
                                <option value="">EXPORTER</option>
                                <option value="">HOME MARKET CO.</option>
                                <option value="">ISC</option>
                                <option value="">JEAN CLAUDE FOREST</option>
                            </select>
                        </div>
                        <div class="form-group col-sm-6">
                            <label>POL</label>
                            <select id="" name="slPOD" class="form-control"><option>Select POL</option>
                                <option value="">10</option>
                                <option value="">11</option>
                                <option value="">22</option>
                                <option value="">33</option>
                                <option value="">44</option>
                                <option value="">55</option>
                                <option value="">66</option>
                                <option value="">8</option>
                                <option value="">9</option>
                                <option value="">9999</option>
                                <option value="">AVL GROUP</option>
                                <option value="">EXPORTER</option>
                                <option value="">HOME MARKET CO.</option>
                                <option value="">ISC</option>
                                <option value="">JEAN CLAUDE FOREST</option>
                            </select>
                        </div>
                        <div class="form-group col-sm-6">
                            <label>POD</label>
                            <select id="" name="slPOD" class="form-control"><option>Select POD</option>
                                <option value="">10</option>
                                <option value="">11</option>
                                <option value="">22</option>
                                <option value="">33</option>
                                <option value="">44</option>
                                <option value="">55</option>
                                <option value="">66</option>
                                <option value="">8</option>
                                <option value="">9</option>
                                <option value="">9999</option>
                                <option value="">AVL GROUP</option>
                                <option value="">EXPORTER</option>
                                <option value="">HOME MARKET CO.</option>
                                <option value="">ISC</option>
                                <option value="">JEAN CLAUDE FOREST</option>
                            </select>
                        </div>
                        <div class="form-group col-sm-6">
                            <label>Line Truker</label>
                            <select id="" name="selLine" class="form-control"><option>Select Line Truker</option>
                                <option value="">10</option>
                                <option value="">11</option>
                                <option value="">22</option>
                                <option value="">33</option>
                                <option value="">44</option>
                                <option value="">55</option>
                                <option value="">66</option>
                                <option value="">8</option>
                                <option value="">9</option>
                                <option value="">9999</option>
                                <option value="">AVL GROUP</option>
                                <option value="">EXPORTER</option>
                                <option value="">HOME MARKET CO.</option>
                                <option value="">ISC</option>
                                <option value="">JEAN CLAUDE FOREST</option>
                            </select>
                        </div>
                        <div class="form-group col-sm-6">
                            <label>Expiration Date</label>
                            <input id="txtOpenDate" type="text" onfocus="DisableEnterKey(id);" onkeypress="DisableEnterKey(id);" readonly="readonly" style="background-color:white; cursor:text;" class="datepicker-input form-control" data-required="true" data-date-format="dd/mm/yyyy" placeholder="Select Date">

                            <!--
                                                                                  <div class="form-group">
                                                                                    <div class="input-group date">
                                                                                        <input type="text" data-provide="datepicker" data-date-end-date="0d" class="form-control date" value="12-02-2012">
                                                                                        <div class="input-group-addon">
                                                                                            <span class="glyphicon glyphicon-th"></span>
                                                                                        </div>
                                                                                    </div>
                                                                                  </div>
                            -->
                        </div>
                        <div class="form-group col-sm-6">
                            <label>Description Of Goods</label>

                            <textarea id="divGoodsDescription" maxlength="250" class="form-group col-sm-12 q-txt-erea"></textarea>
                        </div>
                        <div class="form-group col-sm-6">
                            <label><input type="checkbox" id="" onchange="" onfocus="" onkeypress="">&nbsp;Dangerous Goods</label>
                        </div>


                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-success">
                        <span class="glyphicon glyphicon-save"> </span>Save changes
                    </button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <script src="js/jquery-1.12.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/jquery.nicescroll.js"></script>


