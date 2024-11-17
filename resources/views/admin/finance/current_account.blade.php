<!DOCTYPE html>

<!-- Head -->
<title> @lang('admin.currentAccount') | {{ config('admin.Admin_Title') }} </title>
@include('admin.include.head')

<!-- Tanım -->
<?php $homeUrl = '/admin'; ?>
<?php $listTitle = __('admin.currentAccount'); ?>
<?php $listUrl = "/admin/current/account";  ?>

<!-- BEGIN BODY -->
<body class="fixed-top" id="listInfoData" page={{$page}} rowCountData={{$rowcount}} orderData={{$order}}> 
    
    <!-- Header -->
    @include('admin.include.header')

   <!-- BEGIN CONTAINER -->
   <div id="container" class="row-fluid">
      <!-- BEGIN SIDEBAR -->
      <div class="sidebar-scroll">

        <!-- Sidebar -->
        @include('admin.include.sidebar')

      </div>
      <!-- END SIDEBAR -->
      <!-- BEGIN PAGE -->
      <div id="main-content">
         <!-- BEGIN PAGE CONTAINER-->
         <div class="container-fluid">
            <!-- BEGIN PAGE HEADER-->
            <div class="row-fluid">
               <div class="span12">
                   
                  <!-- BEGIN PAGE TITLE & BREADCRUMB-->
                   <h3 class="page-title"> {{$listTitle}} </h3>
                   <ul class="breadcrumb">
                       <li>
                          <a href="/@lang('admin.lang'){{$homeUrl}}">@lang('admin.home')</a>
                          <span class="divider">/</span>
                       </li>
                       <li class="active"> {{$listTitle}} </li>
                   </ul>
                   <!-- END PAGE TITLE & BREADCRUMB-->
               </div>
            </div>
            <!-- END PAGE HEADER-->
            <!-- BEGIN PAGE CONTENT-->
             <div class="row-fluid">

              <!--- List -->
              <div class="widget red">
                  <div class="widget-title">
                    <h4><i class="icon-edit"></i> {{$listTitle}} </h4>
                    <span class="tools">
                        <a href="javascript:;" class="icon-chevron-down"></a>
                        <a href="javascript:;" class="icon-remove"></a>
                    </span>
                  </div>
                  <div class="widget-body">
                    <div>
                      <div class="clearfix">
                         
                        <div style="display:flex;gap: 5px;flex-wrap: wrap;margin-bottom: 25px;" >

                          <!-- Modal -->
                          <button class="btn btn-success" href="#addModal" role="button" data-toggle="modal" >
                            <i class="icon-plus icon-white"></i> @lang('admin.newAdd')  
                          </button>
                          <!-- Modal Son -->

                          <div id='loader' style="display: flex;width: 20px;"><img src="/upload/images/loader.gif" alt=""></div>

                        </div>                          

                        <!------  Tablo Üst - Arama ----->
                        <div class="row-fluid" style="margin-top:10px;display: flex;gap: 5px;flex-wrap: wrap;" >

                          <!------ Arama ID ----->
                          <div style="display: flex;flex-direction: column;">
                            <p>ID</p>
                            <input type="number" placeholder="id" class="" id="searchTable" searchName="Id" style="width: 120px;" >
                          </div>
                          <!------ Arama ID Son----->

                          <!------ Arama Takvim ----->
                          <div style="display: flex;flex-direction: column;" >
                            <p>@lang('admin.date')</p>
                            <input type="date" class="" style="cursor: pointer; width: 120px; cursor: pointer;"  id="searchTable" searchName="Date" >
                          </div>
                          <!------ Arama Takvim Son----->
                          
                        </div>
                        <!------  Tablo Üst -Arama Son ----->
                        
                        <!------  Tablo Üst - Sonucları Gösterme --------->
                        <div style="display: flex;gap: 5px;flex-wrap: wrap;" >
                          <div style="display: flex;flex-direction: column;width: fit-content;padding: 10px;border: 1px solid;font-size: 12px;" >
                             <p>Toplam Yatırılan</p>
                             <p style="margin-bottom: -9px;margin-right: auto;margin-left: auto;font-weight: bold;" >{{$dbDashboard->totalDepositedTotal}}</p>
                          </div>
                          <div style="display: flex;flex-direction: column;width: fit-content;padding: 10px;border: 1px solid;font-size: 12px;" >
                             <p>Toplam Çekilen</p>
                             <p style="margin-bottom: -9px;margin-right: auto;margin-left: auto;font-weight: bold;" >{{$dbDashboard->totalWithdrawnTotal}}</p>
                          </div>
                          <div style="display: flex;flex-direction: column;width: fit-content;padding: 10px;border: 1px solid;font-size: 12px;" >
                             <p>Kasa Durumu</p>
                             <p style="margin-bottom: -9px;margin-right: auto;margin-left: auto;font-weight: bold;" >{{$dbDashboard->totalTotal}}</p>
                          </div>
                          <div style="display: flex;flex-direction: column;width: fit-content;padding: 10px;border: 1px solid;font-size: 12px;" >
                             <p>Bu Yıl Durum</p>
                             <p style="margin-bottom: -9px;margin-right: auto;margin-left: auto;font-weight: bold;" >{{$dbDashboard->yearTotal}}</p>
                          </div>
                          <div style="display: flex;flex-direction: column;width: fit-content;padding: 10px;border: 1px solid;font-size: 12px;" >
                             <p>Bu Ay Durum</p>
                             <p style="margin-bottom: -9px;margin-right: auto;margin-left: auto;font-weight: bold;" >{{$dbDashboard->monthTotal}}</p>
                          </div>
                          <div style="display: flex;flex-direction: column;width: fit-content;padding: 10px;border: 1px solid;font-size: 12px;" >
                             <p>Bu Hafta Durum</p>
                             <p style="margin-bottom: -9px;margin-right: auto;margin-left: auto;font-weight: bold;" >{{$dbDashboard->last7Total}}</p>
                          </div>
                          <div style="display: flex;flex-direction: column;width: fit-content;padding: 10px;border: 1px solid;font-size: 12px;" >
                             <p>Bugün Durum</p>
                             <p style="margin-bottom: -9px;margin-right: auto;margin-left: auto;font-weight: bold;" >{{$dbDashboard->dayTotal}}</p>
                          </div>
                        </div>
                        <!------  Tablo Üst - Sonucları Gösterme Son ----->

                        <!------ Tablo Ayarları -->
                        <div id="choosedPanel" class="row-fluid"  style="margin-top:10px;display: none;gap: 5px;flex-wrap: wrap;" >
                        
                          <!-- Tablo İşlemi -->
                          <select  style="cursor: pointer;width: max-content;" id="tableSettings" >
                            <option value="delete" selected>@lang('admin.delete')</option>
                            <option value="multi_createClone" >@lang('admin.createClone')</option>
                          </select>
                          <!-- Tablo İşlemi Son -->

                          <div >
                            <button class="btn btn-success" id="multiAction" >@lang('admin.multitask')</button>
                          </div>

                        </div>
                        <!------ Tablo Ayarları Son -->
                        
                        <!------  Tablo ----->
                        <div id="editable-sample_wrapper" class="row-fluid" role="grid">
                            
                          <table class="table table-striped table-hover table-bordered dataTable" id="customers" aria-describedby="editable-sample_info">
                              <thead>
                                
                                <!---- Tümü Seç --->
                                <th style="margin: auto;"><input type="checkbox" id="showAllRows" value="all"  data_count="0"  data_value=""  ></th>

                                <th role="columnheader" rowspan="1" colspan="1" >ID</th>
                                <th role="columnheader" rowspan="1" colspan="1" >@lang('admin.date')</th>
                                <th role="columnheader" rowspan="1" colspan="1" >@lang('admin.deposited')</th>
                                <th role="columnheader" rowspan="1" colspan="1" >@lang('admin.withdrawn')</th>
                                <th role="columnheader" rowspan="1" colspan="1" >@lang('admin.result')</th>
                                <th role="columnheader" rowspan="1" colspan="1" >@lang('admin.description')</th>
                                <th role="columnheader" rowspan="1" colspan="1" >@lang('admin.actions')</th>

                              </thead>
                            <tbody role="alert" aria-live="polite" aria-relevant="all">
                            
                              @for ($i = 0; $i < count($dbFind); $i++)
                              <tr>

                                  <!---- Seç --->
                                  <td class="c-table__cell"><input type="checkbox" id="checkItem" data_check_id="{{$dbFind[$i]->id}}" > </td>

                                  <td class="">{{$dbFind[$i]->id}}</td>
                                  <td class="">{{\Carbon\Carbon::parse($dbFind[$i]->date_time)->isoFormat('Do MMMM YYYY, HH:mm:ss')}}</td>
                                  <td class="">{{$dbFind[$i]->deposited}}</td>
                                  <td class="">{{$dbFind[$i]->withdrawn}}</td>
                                  <td class="">{{$dbFind[$i]->result}}</td>
                                  <td class="">{{$dbFind[$i]->description}}</td>

                                  <td>
                                    <button class="btn btn-success" title="clone" id="cloneItem" data_id="{{$dbFind[$i]->id}}" ><i data_id="{{$dbFind[$i]->id}}" class=" icon-copy"></i></button>
                                    <button class="btn btn-primary" title="modal edit"  id="editItem" href="#editModal" data-toggle="modal" data_id="{{$dbFind[$i]->id}}" ><i data_id="{{$dbFind[$i]->id}}" class="icon-pencil"></i></button>
                                    <button class="btn btn-danger" id="deleteItem" data_id="{{$dbFind[$i]->id}}"><i data_id="{{$dbFind[$i]->id}}" class="icon-trash "></i></button>
                                  </td>
                              </tr>
                              @endfor

                            </tbody>
                          </table>
                          
                          @if(count($dbFind) == 0 )  <p> @lang('admin.dataNotFound') </p> @endif

                        </div>
                        <!------  Tablo Son -->

                        <!------ Tablo Alt  -->
                        <div class="row-fluid" style="margin-top:10px;">

                          <!-- Sıralama -->
                          <div class="span3">
                            <select  class="" style="cursor: pointer;" id="searchTable" searchName="order">
                              <option value="desc" selected>@lang('admin.largeToSmal')  [DESC] </option>
                              <option value="asc">@lang('admin.smalToLarge') [ASC]</option>
                            </select>
                          </div>
                          <!-- Sıralama Son -->

                          <!-- Sayfa Başı -->
                          <div class="span1">
                            <select  class="" style="cursor: pointer;width: 75px;" id="searchTable" searchName="rowcount">
                              <option value="all">@lang('admin.all')</option>  
                              <option value="10" selected="selected">10</option>
                              <option value="15">15</option>
                              <option value="20">20</option>
                              <option value="25">25</option>
                              <option value="50">50</option>
                            </select>
                          </div>
                          <div class="span2">
                            <div class="dataTables_info" id="editable-sample_info"> @lang('admin.numberOfData') : {{$dbSize}} / {{$dbTop}}</div>
                          </div>
                          <!-- Sayfa Başı Son -->

                          <!------  Pagination  -->
                          <div class="span6">
                            <div class="dataTables_paginate paging_bootstrap pagination">
                              <ul>
                                <li class="prev {{$pagination['prev']['page'] ? '' : 'disabled' }}"><a href="{{$pagination['prev']['url']}}">← @lang('admin.back')</a></li>
                                @for ($i = 0; $i < count($pagination["items"]); $i++)
                                <li class="{{$pagination['current'] == $pagination['items'][$i]['page'] ? 'active' :'' }}"><a href="{{$pagination['items'][$i]['url']}}">{{$pagination["items"][$i]['title']}}</a></li>
                                @endfor
                                <li class="next {{$pagination['next']['page'] ? '' : 'disabled' }}"><a href="{{$pagination['next']['url']}}">@lang('admin.next') → </a></li>
                              </ul>
                            </div>
                          </div>
                          <!------  Pagination Son -->

                        </div>
                        <!------ Tablo Alt Son -->

                    </div>
                  </div>
              </div>
              <!--- List Son -->
              
             </div>
            <!-- END PAGE CONTENT-->
         </div>
         <!-- END PAGE CONTAINER-->
      </div>
      <!-- END PAGE -->
   </div>
   <!-- END CONTAINER -->

  <!--************* Modal *********--->
  <!----  Modal Ekleme -->
  <div id="addModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="addModalLabel">@lang('admin.newAdd')</h3>
        <div id='loaderAdd' style="display: none;width: 20px;"><img src="/upload/images/loader.gif" alt=""></div>
      </div>
      <div class="modal-body">
        <div class="row-fluid">
          <div class="span12">
              <div class="control-group">
                <label class="control-label">@lang('admin.date')</label>
                <div class="controls controls-row">
                  <input type="datetime-local" class="input-block-level" name="dateAdd" id="dateAdd" placeholder="0"  focusType ="true" focusControl="add" focusControl_Active="false" focusOrder="1" >
                </div>
              </div>
          </div>
        </div>
        <div class="row-fluid">
          <div class="span6">
              <div class="control-group">
                <label class="control-label">@lang('admin.deposited')</label>
                <div class="controls controls-row">
                  <input type="number" class="input-block-level" name="depositedAdd" id="depositedAdd" placeholder="0"  focusType ="true" focusControl="add" focusControl_Active="false" focusOrder="2" >
                </div>
              </div>
          </div>
          <div class="span6">
              <div class="control-group">
                <label class="control-label">@lang('admin.withdrawn')</label>
                <div class="controls controls-row">
                  <input type="number" class="input-block-level" name="withdrawnAdd" id="withdrawnAdd" placeholder="0"  focusType ="true" focusControl="add" focusControl_Active="false" focusOrder="3" >
                </div>
              </div>
          </div>
        </div> 
        <div class="row-fluid">
          <div class="span12">
              <div class="control-group">
                <label class="control-label">@lang('admin.result')</label>
                <div class="controls controls-row">
                  <label class="control-label" name="resultAdd" id="resultAdd" >0</label>
                </div>
              </div>
          </div>
        </div>      
        <div class="row-fluid">
          <div class="span12">
              <div class="control-group">
                <label class="control-label">@lang('admin.description')</label>
                <div class="controls controls-row">
                  <textarea class="span12" name="descriptionAdd" id="descriptionAdd"  rows="3" cols="80" focusType ="true" focusControl="add" focusControl_Active="true" focusOrder="4"></textarea>
                </div>
              </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">@lang('admin.close')</button>
        <button class="btn btn-info" id="reset_add" >@lang('admin.reset')</button>
        <button class="btn btn-success" id="new_add" >@lang('admin.add')</button>
      </div>
  </div>
  <!----  Modal Ekleme Son -->

  <!----  Modal Güncelle -->
  <div id="editModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
      <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h3 id="editModalTitle" style="display: flex;" ><p>@lang('admin.edit') #</p><p id="editModalValueId">54</p> </h3>
          <div id='loaderEdit' style="display: flex;width: 20px;"><img src="/upload/images/loader.gif" alt=""></div>
      </div>
      <div class="modal-body">
        <div class="row-fluid">
          <div class="span12">
              <div class="control-group">
                <label class="control-label">@lang('admin.date')</label>
                <div class="controls controls-row">
                  <input type="datetime-local" class="input-block-level" name="dateEdit" id="dateEdit" placeholder="0" focusType ="true" focusControl="edit" focusControl_Active="false" focusOrder="1" >
                </div>
              </div>
          </div>
        </div>
        <div class="row-fluid">
          <div class="span6">
              <div class="control-group">
                <label class="control-label">@lang('admin.deposited')</label>
                <div class="controls controls-row">
                  <input type="number" class="input-block-level" name="depositedEdit" id="depositedEdit" placeholder="0"  focusType ="true" focusControl="edit" focusControl_Active="false" focusOrder="2" >
                </div>
              </div>
          </div>
          <div class="span6">
              <div class="control-group">
                <label class="control-label">@lang('admin.withdrawn')</label>
                <div class="controls controls-row">
                  <input type="number" class="input-block-level" name="withdrawnEdit" id="withdrawnEdit" placeholder="0"  focusType ="true" focusControl="edit" focusControl_Active="false" focusOrder="3" >
                </div>
              </div>
          </div>
        </div> 
        <div class="row-fluid">
          <div class="span12">
              <div class="control-group">
                <label class="control-label">@lang('admin.result')</label>
                <div class="controls controls-row">
                  <label class="control-label" name="resultEdit" id="resultEdit" >0</label>
                </div>
              </div>
          </div>
        </div>      
        <div class="row-fluid">
          <div class="span12">
              <div class="control-group">
                <label class="control-label">@lang('admin.description')</label>
                <div class="controls controls-row">
                  <textarea class="span12" name="descriptionEdit" id="descriptionEdit"  rows="3" cols="80" focusType ="true" focusControl="edit" focusControl_Active="true" focusOrder="4"></textarea>
                </div>
              </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">@lang('admin.close')</button>
        <button class="btn btn-success" id="edit_item">@lang('admin.edit')</button>
      </div>
  </div>
  <!----  Modal Güncelle Son -->
  <!--************* Modal Son *********--->


  <footer>
    <!-- Footer -->
    @include('admin.include.footer')

    <!------- JS --->
    <script src="{{asset('/assets/admin')}}/js/01_0_sabit_list/00_list_search.js"></script>
    <script src="{{asset('/assets/admin')}}/js//finance/current_account.js"></script>

  </footer>

</body>
<!-- END BODY -->
</html>
