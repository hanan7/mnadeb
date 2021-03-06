  <div class="modal fade " id="modal-operation" tabindex="-1" role="dialog" aria-labelledby="modal-quta">
      <div class="modal-dialog modal-width-80" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="gridSystemModalLabel">New Operation</h4>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-sm-2">
                  <section class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">B/L Type</h4>
                    </div>
                    <div class="panel-body">
                        <label class="direct selmaster" id="this-Direct">
                            <input type="radio" name="B/L-Type"  autocomplete="off" value="" checked > 
                            <i class="fa fa-indent import-icon-style"></i>
                            &nbsp;Direct
                        </label>
                        <br>
                        <label class="house selmaster" id="this-House">
                            <input type="radio" name="B/L-Type"  autocomplete="off" value=""> 
                            <i class="fa fa-link export-icon-style"></i>
                            &nbsp;House
                        </label>
                        <br>
                        <label class="master selmaster" id="this-Master">
                            <input type="radio" name="B/L-Type" id="" autocomplete="off" value=""> 
                            <i class="fa fa-book domestic-icon-style"></i>
                            &nbsp;Master
                        </label>
                    </div>
                  </section>

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
                        <label id="transport-opocean" class="trans-type">
                            <input type="radio" name="Transport Type" id="" autocomplete="off" value="" checked> 
                            <i class="fa fa-ship ocean-icon-style"></i>
                            &nbsp;Ocean
                        </label>
                        <br>
                        <label id="transport-opair" class="trans-type">
                            <input type="radio" name="Transport Type" id="" autocomplete="off" value=""> 
                            <i class="fa fa-plane air-icon-style"></i>
                            &nbsp;Air
                        </label>
                        <br>
                        <label id="transport-opinland" class="trans-type">
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
                                <input type="radio" name="Ship-Type" id="" autocomplete="off" value="" checked > 
                                &nbsp;FCL
                            </label>
                            <br>
                            <label class="">
                                <input type="radio" name="Ship-Type" id="" autocomplete="off" value=""> 
                                &nbsp;LCL
                            </label>
                            <br>

                        </div>
                        <div class="type-inland hide">
                            <label class="">
                            <input type="radio" name="ShipType" id="" autocomplete="off" value="" checked > 
                            &nbsp;FTL
                            </label>
                            <br>
                            <label class="">
                                <input type="radio" name="ShipType" id="" autocomplete="off" value=""> 
                                &nbsp;LTL
                            </label>
                            <br>

                        </div>
                        <div class="cons-master hide">
                            <label class="">
                                <input type="radio" id=""  name="Ship-Type" value="">
                                &nbsp;Consolidation
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
                        <button id="" class="btn btn-info btn-md btn-sm-rd" data-toggle="modal" data-target="#EditCustomerModal"><i class="fa fa-pencil"></i>
                        </button>
                        <button id="" class="btn btn-warning btn-md btn-sm-rd" data-toggle="modal" data-target="#AddCustomerModal"><i class="fa fa-plus"></i>
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
                        <button id="" class="btn btn-warning btn-md btn-sm-rd" data-toggle="modal" data-target="#AddCustomerModal"><i class="fa fa-plus"></i>
                        </button>
                        <button id="" class="btn btn-info btn-md btn-sm-rd" data-toggle="modal" data-target="#EditCustomerModal"><i class="fa fa-pencil"></i>
                        </button>
                      </div>
                  </div>
                  <div class="divAgent form-group col-sm-6 hide ">
                    <div class="col-sm-6 inner-col">
                        <label>Agent</label>
                    <select id="" name="slAgents" class="form-control"  data-required="true">
                        <option value="">Select Agent</option>
                        <option value="">1</option>
                        <option value="">2</option>
                        <option value="">3</option>
                        <option value="">4</option>
                        <option value="">5</option>
                        <option value="">6</option>
                        <option value="">7</option>
                        <option value="">8</option>
                        <option value="">9</option>
                        <option value="">ABC AGENCY</option>
                        <option value="">WERW</option></select>
                    </div>
                    <div class="col-sm-4  m-t-md">
                        <button id="" class="btn btn-info btn-md btn-sm-rd" data-toggle="modal" data-target="#CustomerModal"><i class="fa fa-pencil"></i>
                        </button>
                        <button id="" class="btn btn-warning btn-md btn-sm-rd" data-toggle="modal" data-target="#CustomerModal"><i class="fa fa-plus"></i>
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
                    <label>Line/Truker</label>
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
                      <label>Close Date</label>
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
              </div>
            </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-success">
                <span class="glyphicon glyphicon-save"> </span>Save changes
            </button>
          </div>
            </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

<!--Copy Modal -->
        <div class="modal fade " id="modal-copy" tabindex="-1" role="dialog" aria-labelledby="mm">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="gridSystemModalLabel">Copy Operation</h4>
                  </div>
                  <div class="modal-body">
                    <div class="row">
                      <div class="form-group col-sm-12">
                            <h4>Copy Options:</h4>
                            <label>
                                <input type="checkbox" id="">&nbsp;Include Payables
                          </label><br>
                            <label>
                                <input type="checkbox" id="">&nbsp;Include Receivables
                          </label><br>
                        </div>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-defult" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-success">
                        <span class="fa fa-copy"> </span> &nbsp;Copy
                    </button>
                  </div>
                </div><!-- /.modal-content -->
              </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->

    <!--EDIT Customer  Modal -->
        <div class="modal fade " id="EditCustomerModal" tabindex="-1" role="dialog" aria-labelledby="mm">
              <div class="modal-dialog modal-width-80" role="document">
                <div class="modal-content ">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="gridSystemModalLabel">Customer:</h4>
                  </div>
                  <div class="modal-body">
                    <div class="row">
                      <div class="col-sm-12">
                          <div class="tap modal-header">
                            <ul class="nav nav-pills" role="tablist">
                              <li role="presentation" class="active"><a href="#sectionBasicData" aria-controls="sectionBasicData" role="tab" data-toggle="tab"><span class="badge">1</span> Basic Data</a>
                                </li>
                              <li role="presentation"><a href="#sectionBilling" aria-controls="sectionBilling" role="tab" data-toggle="tab"><span class="badge">2</span>Billing</a></li>
                              <li role="presentation"><a href="#sectionAddress" aria-controls="sectionAddress" role="tab" data-toggle="tab"><span class="badge">3</span> Addresses </a></li>
                              <li role="presentation"><a href="#sectionContacts" aria-controls="sectionContacts" role="tab" data-toggle="tab"><span class="badge">4</span>Contacts</a></li>
                            </ul>
                          </div>
                      </div>
                    </div>
                      <div class="tab-content">
                        <section role="tabpanel" class="basic-data tab-pane active" id="sectionBasicData">
                        <div class="row">
                            <div class="form-group col-sm-6">
                              <label>Code</label>
                              <input id="" type="text" class="form-control" placeholder="1021" required>
                            </div>
                            <div class="form-group col-sm-6">
                              <label>Name</label>
                              <input id="" type="text" class="form-control" placeholder="EX.10" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-sm-6">
                              <label>Araboc Name</label>
                              <input id="" type="text" class="form-control" placeholder="111" required>
                            </div>
                          <div class="form-group col-sm-6">
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
                        </div>
                        <div class="row">
                            <div class="form-group col-sm-6">
                              <label>Website</label>
                              <input id="" type="text" class="form-control" placeholder="EX.WWW.FIRSTHAND.COM" required>
                            </div>
                          <div class="form-group col-sm-6">
                              <label>Email</label>
                              <input id="" type="email" class="form-control" placeholder="EMAIL" required>
                          </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-sm-6">
                                <label>Notes</label>
                                <input type="text" class="form-control" placeholder="NOTES" maxlength="200" >
                            </div>
                            <div class="form-group col-sm-6">
                                <button type="button" class="btn btn-info btn-sm m-t-25">
                                    <span class="fa fa-hand-o-right"> </span> &nbsp;Visit Website
                                </button>
                            </div>  
                        </div>
                        <div class="row">
                            <div class="col-sm-6"></div>
                            <div class="form-group col-sm-3">
                                <div class="form-group col-sm-12">
                                    <label><input type="checkbox" id="" onchange="" onfocus="" onkeypress="">&nbsp;Consignee</label>
                                </div>
                                <div class="form-group col-sm-12">
                                    <label><input type="checkbox" id="" onchange="" onfocus="" onkeypress="">&nbsp;Shipper</label>
                                </div>
                            </div>
                            <div class="form-group col-sm-3">
                                <div class="form-group col-sm-12">
                                    <label><input type="checkbox" id="" onchange="" onfocus="" onkeypress="">&nbsp;Inactive</label>
                                </div>
                            </div>
                        </div>
                      </section>
                        <section role="tabpanel" class="billing tab-pane" id="sectionBilling">
                        <div class="row">
                            <div class="form-group col-sm-6">
                              <label>VAT.No</label>
                              <input id="" type="text" class="form-control" placeholder="VAT.NO" required>
                            </div>
                            <div class="form-group col-sm-6">
                              <label>Bank Name</label>
                              <input id="" type="text" class="form-control" placeholder="EX.CIB" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-sm-6">
                              <label>Payment Terms</label>
                              <select id="" name="" class="form-control" >
                                <option value="">Select paymentTerm</option>
                                <option value="1">ADMIN</option>
                                <option value="2">MOSTAFA</option>
                                <option value="3">MA</option>
                                <option value="4">MOHAMED</option>
                                <option value="5">SHERIF</option>
                                <option value="6">TEST</option></select>
                            </div>
                          <div class="form-group col-sm-6">
                              <label>Bank Address</label>
                              <input id="" type="text" class="form-control" placeholder="EX.Address" maxlength="200" required>
                          </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-sm-6">
                              <label>Invoice Country</label>
                              <select id="" name="" class="form-control" >
                                <option value="" selected>EGY</option>
                                <option value="1">ADMIN</option>
                                <option value="2">MOSTAFA</option>
                                <option value="3">MA</option>
                                <option value="4">MOHAMED</option>
                                <option value="5">SHERIF</option>
                                <option value="6">TEST</option></select>
                            </div>
                          <div class="form-group col-sm-6">
                              <label>Swift</label>
                              <input id="" type="text" class="form-control" placeholder="EX.Swift Code" required>
                          </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-sm-6">
                                <label>Tax Type</label>
                                <select id="" name="" class="form-control" >
                                <option value="" selected>Select Tax Type</option>
                                <option value="1">ADMIN</option>
                                <option value="2">MOSTAFA</option>
                                <option value="3">MA</option>
                                <option value="4">MOHAMED</option>
                                <option value="5">SHERIF</option>
                                <option value="6">TEST</option></select>
                            </div>
                            <div class="form-group col-sm-6">
                                <label>Bank Acount No.</label>
                                <input id="" type="number" class="form-control" placeholder="EX.Acount No" required>
                            </div>  
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <label>IBAN No.</label>
                                <input id="" type="number" class="form-control" placeholder="EX.IBAN No" required>
                            </div>
                            <div class="form-group col-sm-3 m-t-25">
                                <div class="form-group col-sm-12">
                                    <label><input type="checkbox" id="" onchange="" onfocus="" onkeypress="">&nbsp;Consolidated Inv.</label>
                                </div>
                            </div>
                        </div>
                      </section>
                        <section role="tabpanel" class="address tab-pane" id="sectionAddress">
                        <div class="row">
                            <div class="form-group col-sm-6">
                                <button type="button" class="btn btn-warning btn-sm m-t-25" data-toggle="modal" data-target="#newAddressModal">
                                    <span class="fa fa-plus"> </span> &nbsp;New Address
                                </button>
                            </div>  
                        </div>
                      </section>
                        <section role="tabpanel" class="contacts tab-pane" id="sectionContacts">
                          <div class="row">
                            <div class="form-group col-sm-6">
                                <button type="button" class="btn btn-warning btn-sm m-t-25" data-toggle="modal" data-target="#newContactModal">
                                    <span class="fa fa-plus"> </span> &nbsp;New Contact
                                </button>
                            </div>  
                          </div>
                      </section>
                      </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-success">
                        <span class="glyphicon glyphicon-save"> </span> &nbsp;Save
                    </button>
                    <button type="button" class="btn btn-defult" data-dismiss="modal">Close</button>
                  </div>
                </div><!-- /.modal-content -->
              </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
