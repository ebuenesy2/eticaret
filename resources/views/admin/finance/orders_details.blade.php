<!DOCTYPE html>

<!-- Head -->
<title> @lang('admin.orderDetails') #{{ $id }} | {{ config('admin.Admin_Title') }} </title>
@include('admin.include.head')

<!-- Tanım -->
<?php $homeUrl = '/admin'; ?>
<?php $listTitle = __('admin.orderDetails'); ?>
<?php $listUrl = "/admin/order";  ?>


<!-- Yıldırımdev Table Css -->
<link href="{{asset('/assets/admin/yildirimdev')}}/css/yildirimdev_table.css" rel="stylesheet" type="text/css" />

<!-- BEGIN BODY -->
<body class="fixed-top" id="dataValueInfo" page={{$page}} rowCountData={{$rowcount}} orderData={{$order}} data_id={{$id}} > 
  <div style="display:none;" id="order_info" purchase_amount="{{$DB_Find_Order->purchase_amount}}" purchase_unit_price="{{$DB_Find_Order->purchase_unit_price}}" >Order Info</div>  

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
                   <h3 class="page-title"> {{$listTitle}} [ # {{$id}} ]</h3>
                   <ul class="breadcrumb">
                       <li>
                          <a href="/@lang('admin.lang'){{$homeUrl}}">@lang('admin.home')</a>
                          <span class="divider">/</span>
                       </li>
                       <li>
                          <a href="/@lang('admin.lang'){{$homeUrl}}/order">@lang('admin.orders')</a>
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
                    <h4><i class="fa fa-edit"></i> {{$listTitle}} </h4>
                    <span class="tools">
                        <a href="javascript:;" class="fa fa-chevron-down"></a>
                        <a href="javascript:;" class="fa fa-remove"></a>
                    </span>
                  </div>
                  <div class="widget-body">
                    <div>
                      <div class="clearfix">
                         
                        <div style="display:flex;gap: 5px;flex-wrap: wrap;margin-bottom: 25px;" >

                          <!-- Modal -->
                          <button class="btn btn-info" href="#editOrderModal" role="button" data-toggle="modal" >
                            <i class="fa fa-edit icon-white"></i> Satış Düzenle
                          </button>
                          <!-- Modal Son -->

                          <!-- Modal -->
                          <button class="btn btn-success" href="#addModal" role="button" data-toggle="modal" >
                            <i class="fa fa-plus icon-white"></i> @lang('admin.newAdd') 
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

                          <!------ Arama Durum ----->
                          <div style="display: flex;flex-direction: column;" >
                            <p>@lang('admin.status')</p>
                            <select class="" style="cursor: pointer; width: 120px;" id="searchTable" searchName="Status"  >
                                <option value="">@lang('admin.all')</option>
                                <option value="1">@lang('admin.active')</option>
                                <option value="0">@lang('admin.passive')</option>
                            </select>
                          </div>
                          <!------ Arama Durum Son----->
                          
                        </div>
                        <!------  Tablo Üst -Arama Son ----->

                        <!------  Tablo Üst - Sonucları Gösterme --------->
                        <div style="display: flex;gap: 5px;flex-wrap: wrap;" >
                          <div style="display: flex;flex-direction: column;width: fit-content;padding: 10px;border: 1px solid;font-size: 12px;" >
                             <p>@lang('admin.total') - @lang('admin.count')</p>
                             <p style="margin-bottom: -9px;margin-right: auto;margin-left: auto;font-weight: bold;" >{{$DB_Find_Order->ordersDetailsCount}}</p>
                          </div>
                          <div style="display: flex;flex-direction: column;width: fit-content;padding: 10px;border: 1px solid;font-size: 12px;" >
                             <p>@lang('admin.purchaseAmount')</p>
                             <p style="margin-bottom: -9px;margin-right: auto;margin-left: auto;font-weight: bold;" >{{$DB_Find_Order->purchase_amount}}</p>
                          </div>
                          <div style="display: flex;flex-direction: column;width: fit-content;padding: 10px;border: 1px solid;font-size: 12px;" >
                             <p>@lang('admin.purchaseUnitPrice')</p>
                             <p style="margin-bottom: -9px;margin-right: auto;margin-left: auto;font-weight: bold;" >{{$DB_Find_Order->purchase_unit_price}}</p>
                          </div>
                          <div style="display: flex;flex-direction: column;width: fit-content;padding: 10px;border: 1px solid;font-size: 12px;" >
                             <p>@lang('admin.purchasePrice')</p>
                             <p style="margin-bottom: -9px;margin-right: auto;margin-left: auto;font-weight: bold;" >{{$DB_Find_Order->orderPrice}}</p>
                          </div>
                          <div style="display: flex;flex-direction: column;width: fit-content;padding: 10px;border: 1px solid;font-size: 12px;" >
                             <p>NET @lang('admin.purchaseAmount')</p>
                             <p style="margin-bottom: -9px;margin-right: auto;margin-left: auto;font-weight: bold;" >{{$DB_Find_Order->purchase_amount_net}}</p>
                          </div>
                          <div style="display: flex;flex-direction: column;width: fit-content;padding: 10px;border: 1px solid;font-size: 12px;" >
                             <p>@lang('admin.totalPurchaseAmount')</p>
                             <p style="margin-bottom: -9px;margin-right: auto;margin-left: auto;font-weight: bold;" >{{$DB_Find_Order->ordersDetailsPurchaseAmount}}</p>
                          </div>
                          <div style="display: flex;flex-direction: column;width: fit-content;padding: 10px;border: 1px solid;font-size: 12px;" >
                             <p>@lang('admin.totalSalesAmount')</p>
                             <p style="margin-bottom: -9px;margin-right: auto;margin-left: auto;font-weight: bold;" >{{$DB_Find_Order->ordersDetailsSalesAmount}}</p>
                          </div>
                          <div style="display: flex;flex-direction: column;width: fit-content;padding: 10px;border: 1px solid;font-size: 12px;" >
                             <p>@lang('admin.remainingAmount')</p>
                             <p style="margin-bottom: -9px;margin-right: auto;margin-left: auto;font-weight: bold;" >{{$DB_Find_Order->ordersDetailsRemainingAmount}}</p>
                          </div>
                          <div style="display: flex;flex-direction: column;width: fit-content;padding: 10px;border: 1px solid;font-size: 12px;" >
                             <p>@lang('admin.purchaseTotalPrice')</p>
                             <p style="margin-bottom: -9px;margin-right: auto;margin-left: auto;font-weight: bold;" >{{$DB_Find_Order->orderTotalPrice}}</p>
                          </div>
                          <div style="display: flex;flex-direction: column;width: fit-content;padding: 10px;border: 1px solid;font-size: 12px;" >
                             <p>@lang('admin.totalSalesPrice')</p>
                             <p style="margin-bottom: -9px;margin-right: auto;margin-left: auto;font-weight: bold;" >{{$DB_Find_Order->ordersDetailsNetPrice}}</p>
                          </div>
                          <div style="display: flex;flex-direction: column;width: fit-content;padding: 10px;border: 1px solid;font-size: 12px;" >
                             <p>@lang('admin.profit_loss')</p>
                             <p style="margin-bottom: -9px;margin-right: auto;margin-left: auto;font-weight: bold;" >{{$DB_Find_Order->ordersDetailsProfit}}</p>
                          </div>
                          <div style="display: flex;flex-direction: column;width: fit-content;padding: 10px;border: 1px solid;font-size: 12px;" >
                             <p>@lang('admin.percent')</p>
                             <p style="margin-bottom: -9px;margin-right: auto;margin-left: auto;font-weight: bold;" >{{$DB_Find_Order->ordersDetailsPercent}}%</p>
                          </div>
                        </div>
                        <!------  Tablo Üst - Sonucları Gösterme Son ----->
                        <!------  Tablo Üst - Sonucları Gösterme --------->
                        <div style="display: flex;gap: 5px;flex-wrap: wrap; margin-top:10px;" >
                          <div style="display: flex;flex-direction: column;width: fit-content;padding: 10px;border: 1px solid;font-size: 12px;" >
                             <p>@lang('admin.active') - @lang('admin.count')</p>
                             <p style="margin-bottom: -9px;margin-right: auto;margin-left: auto;font-weight: bold;" >{{$DB_Find_Order->ordersDetailsActiveCount}}</p>
                          </div>
                          <div style="display: flex;flex-direction: column;width: fit-content;padding: 10px;border: 1px solid;font-size: 12px;" >
                            <p>@lang('admin.active') - @lang('admin.totalPurchaseAmount') </p>
                            <p style="margin-bottom: -9px;margin-right: auto;margin-left: auto;font-weight: bold;" >{{$DB_Find_Order->ordersDetailsActiveTotalPurchaseAmount}}</p>
                          </div>
                          <div style="display: flex;flex-direction: column;width: fit-content;padding: 10px;border: 1px solid;font-size: 12px;" >
                            <p>@lang('admin.active') - @lang('admin.totalSalesAmount') </p>
                            <p style="margin-bottom: -9px;margin-right: auto;margin-left: auto;font-weight: bold;" >{{$DB_Find_Order->ordersDetailsActiveTotalSalesAmount}}</p>
                          </div>
                          <div style="display: flex;flex-direction: column;width: fit-content;padding: 10px;border: 1px solid;font-size: 12px;" >
                             <p>@lang('admin.active') - @lang('admin.purchaseTotalPrice')</p>
                             <p style="margin-bottom: -9px;margin-right: auto;margin-left: auto;font-weight: bold;" >{{$DB_Find_Order->orderActivePrice}}</p>
                          </div>
                          <div style="display: flex;flex-direction: column;width: fit-content;padding: 10px;border: 1px solid;font-size: 12px;" >
                            <p>@lang('admin.active') - @lang('admin.totalSalesPrice') </p>
                            <p style="margin-bottom: -9px;margin-right: auto;margin-left: auto;font-weight: bold;" >{{$DB_Find_Order->ordersDetailsActiveNetPrice}}</p>
                          </div>
                          <div style="display: flex;flex-direction: column;width: fit-content;padding: 10px;border: 1px solid;font-size: 12px;" >
                            <p>@lang('admin.active') - @lang('admin.profit_loss') </p>
                            <p style="margin-bottom: -9px;margin-right: auto;margin-left: auto;font-weight: bold;" >{{$DB_Find_Order->ordersDetailsActiveProfit}}</p>
                          </div>
                          <div style="display: flex;flex-direction: column;width: fit-content;padding: 10px;border: 1px solid;font-size: 12px;" >
                            <p>@lang('admin.active') - @lang('admin.percent') </p>
                            <p style="margin-bottom: -9px;margin-right: auto;margin-left: auto;font-weight: bold;" >{{$DB_Find_Order->ordersDetailsActivePercent}}</p>
                          </div>
                        </div>
                        <!------  Tablo Üst - Sonucları Gösterme Son ----->
                        <!------  Tablo Üst - Sonucları Gösterme --------->
                        <div style="display: flex;gap: 5px;flex-wrap: wrap; margin-top:10px;" >
                          <div style="display: flex;flex-direction: column;width: fit-content;padding: 10px;border: 1px solid;font-size: 12px;" >
                             <p>@lang('admin.passive') - @lang('admin.count')</p>
                             <p style="margin-bottom: -9px;margin-right: auto;margin-left: auto;font-weight: bold;" >{{$DB_Find_Order->ordersDetailsPassiveCount}}</p>
                          </div>
                          <div style="display: flex;flex-direction: column;width: fit-content;padding: 10px;border: 1px solid;font-size: 12px;" >
                            <p>@lang('admin.passive') - @lang('admin.totalPurchaseAmount') </p>
                            <p style="margin-bottom: -9px;margin-right: auto;margin-left: auto;font-weight: bold;" >{{$DB_Find_Order->ordersDetailsPassiveTotalPurchaseAmount}}</p>
                          </div>
                          <div style="display: flex;flex-direction: column;width: fit-content;padding: 10px;border: 1px solid;font-size: 12px;" >
                            <p>@lang('admin.passive') - @lang('admin.totalSalesAmount') </p>
                            <p style="margin-bottom: -9px;margin-right: auto;margin-left: auto;font-weight: bold;" >{{$DB_Find_Order->ordersDetailsPassiveTotalSalesAmount}}</p>
                          </div>
                          <div style="display: flex;flex-direction: column;width: fit-content;padding: 10px;border: 1px solid;font-size: 12px;" >
                             <p>@lang('admin.passive') - @lang('admin.purchaseTotalPrice')</p>
                             <p style="margin-bottom: -9px;margin-right: auto;margin-left: auto;font-weight: bold;" >{{$DB_Find_Order->orderPassivePrice}}</p>
                          </div>
                          <div style="display: flex;flex-direction: column;width: fit-content;padding: 10px;border: 1px solid;font-size: 12px;" >
                            <p>@lang('admin.passive') - @lang('admin.totalSalesPrice') </p>
                            <p style="margin-bottom: -9px;margin-right: auto;margin-left: auto;font-weight: bold;" >{{$DB_Find_Order->ordersDetailsPassiveNetPrice}}</p>
                          </div>
                          <div style="display: flex;flex-direction: column;width: fit-content;padding: 10px;border: 1px solid;font-size: 12px;" >
                            <p>@lang('admin.passive') - @lang('admin.profit_loss') </p>
                            <p style="margin-bottom: -9px;margin-right: auto;margin-left: auto;font-weight: bold;" >{{$DB_Find_Order->ordersDetailsPassiveProfit}}</p>
                          </div>
                          <div style="display: flex;flex-direction: column;width: fit-content;padding: 10px;border: 1px solid;font-size: 12px;" >
                            <p>@lang('admin.passive') - @lang('admin.percent') </p>
                            <p style="margin-bottom: -9px;margin-right: auto;margin-left: auto;font-weight: bold;" >{{$DB_Find_Order->ordersDetailsPassivePercent}}</p>
                          </div>
                        </div>
                        <!------  Tablo Üst - Sonucları Gösterme Son ----->
               
                        <!------ Tablo Ayarları -->
                        <div id="choosedPanel" class="row-fluid"  style="margin-top:20px;display: none;gap: 5px;flex-wrap: wrap;" >
                        
                          <!-- Tablo İşlemi -->
                          <select  style="cursor: pointer;width: max-content;" id="tableSettings" >
                            <option value="delete" selected>@lang('admin.delete')</option>
                            <option value="edit_active" >@lang('admin.active')</option>
                            <option value="edit_passive" >@lang('admin.passive')</option>
                            <option value="multi_createClone" >@lang('admin.createClone')</option>
                          </select>
                          <!-- Tablo İşlemi Son -->

                          <div >
                            <button class="btn btn-success" id="multiAction" >@lang('admin.multitask')</button>
                          </div>

                        </div>
                        <!------ Tablo Ayarları Son -->
                        
                        <!------  Tablo ----->
                        <div class="table-container" style="margin-top: 15px;" >
                            
                          <table>
                              <thead>
                                
                                <!---- Tümü Seç --->
                                <th data-cell="Tümü Seç" style="margin: auto;"><input type="checkbox" id="showAllRows" value="all"  data_count="0"  data_value=""  ></th>

                                <th class="table_title" exportName="id" >ID</th>
                                <th class="table_title" exportName="id" >@lang('admin.date')</th>
                                <th class="table_title" exportName="id" >@lang('admin.date') Full</th>
                                <th class="table_title" exportName="id" >@lang('admin.type')</th>
                                <th class="table_title" exportName="id" >@lang('admin.amount')</th>
                                <th class="table_title" exportName="id" >@lang('admin.unitPrice')</th>
                                <th class="table_title" exportName="id" >@lang('admin.total')</th>
                                <th class="table_title" exportName="id" >@lang('admin.profit_loss')</th>
                                <th class="table_title" exportName="id" >@lang('admin.profit_loss') - @lang('admin.status')</th>
                                <th class="table_title" exportName="id" >@lang('admin.percent')</th>
                                <th class="table_title" exportName="id" >@lang('admin.status')</th>
                                <th class="table_title" exportName="id" >@lang('admin.actions')</th>

                              </thead>
                            <tbody role="alert" aria-live="polite" aria-relevant="all">
                            
                              @for ($i = 0; $i < count($dbFind); $i++)
                              <tr>

                                  <!---- Seç --->
                                  <td data-cell="Seç"  class="c-table__cell"><input type="checkbox" id="checkItem" data_check_id="{{$dbFind[$i]->id}}" > </td>

                                  <td data-cell="ID">{{$dbFind[$i]->id}}</td>
                                  <td class="">{{$dbFind[$i]->date_time}}</td>
                                  <td class="">{{$dbFind[$i]->date_timeFull}}</td>
                                  <td class="">{{$dbFind[$i]->type}}</td>
                                  <td class="">{{$dbFind[$i]->amount}}</td>
                                  <td class="">{{$dbFind[$i]->unit_price}}</td>
                                  <td class="">{{$dbFind[$i]->total}}</td>
                                  <td class="">{{ $dbFind[$i]->type == 'S' ? $dbFind[$i]->profit : '-'}}</td>
                                  <td style="display: flex;" >
                                    <span style="margin: auto; {{$dbFind[$i]->type == 'S' ? 'display:none;' : 'display:block;'}} " class="alert"  >@lang('admin.purchase')</span>
                                    <span style="margin: auto; {{$dbFind[$i]->type == 'A' ? 'display:none;' : 'display:block;'}} " class="alert {{$dbFind[$i]->profit > 0 ? 'alert-success' : 'alert-error' }}"  >{{$dbFind[$i]->profit > 0  ? __('admin.profit') : __('admin.loss')  }}</span>
                                  </td>
                                  <td class="">{{ $dbFind[$i]->type == 'S' ? $dbFind[$i]->orderDetailPercent.'%' : '-'}}</td>
                                  <td data-cell="@lang('admin.status')" style="display: flex;" >
                                    <span style="margin: auto;" class="alert {{$dbFind[$i]->isActive ? 'alert-success' : 'alert-error' }}" data_value="{{$dbFind[$i]->isActive}}" >{{$dbFind[$i]->isActive ? __('admin.active') : __('admin.passive')  }}</span>
                                  </td>

                                  <td data-cell="@lang('admin.actions')" >
                                    <button class="btn {{$dbFind[$i]->isActive ? 'btn-success ' : 'btn-danger '}}" id="statusItem" data_id="{{$dbFind[$i]->id}}" data_isActive="{{$dbFind[$i]->isActive}}"  ><i data_id="{{$dbFind[$i]->id}}" data_isActive="{{$dbFind[$i]->isActive}}"  class="{{$dbFind[$i]->isActive ? 'icon-eye-open' : ' icon-eye-close'}}"></i></button>
                                    <button class="btn btn-success" title="clone" id="cloneItem" data_id="{{$dbFind[$i]->id}}" ><i data_id="{{$dbFind[$i]->id}}" class=" icon-copy"></i></button>
                                    <button class="btn btn-primary" title="modal edit"  id="editItem" href="#editModal" data-toggle="modal" data_id="{{$dbFind[$i]->id}}" ><i data_id="{{$dbFind[$i]->id}}" class="fa fa-pencil"></i></button>
                                    <button class="btn btn-danger" id="deleteItem" data_id="{{$dbFind[$i]->id}}"><i data_id="{{$dbFind[$i]->id}}" class="fa fa-trash "></i></button>
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
  
  <!----  Modal Satış Güncelle -->
  <div id="editOrderModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
      <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h3 id="editModalTitle" style="display: flex;" ><p>Satış Düzenle #</p><p id="editModalValueId">54</p> </h3>
          <div id='loaderEdit' style="display: flex;width: 20px;"><img src="/upload/images/loader.gif" alt=""></div>
      </div>
      <div class="modal-body">
        <div class="row-fluid">
          <div class="span6">
              <div class="control-group">
                <label class="control-label">@lang('admin.date')</label>
                <div class="controls controls-row">
                  <input type="date" class="input-block-level" name="dateEdit" id="dateEdit" placeholder="0"  focusType ="true" focusControl="edit" focusControl_Active="false" focusOrder="1" >
                </div>
              </div>
          </div>
          <div class="span6">
              <div class="control-group">
                <label class="control-label">@lang('admin.date') Full</label>
                <div class="controls controls-row">
                  <input type="text" class="input-block-level" name="dateFullEdit" id="dateFullEdit" placeholder=""  focusType ="true" focusControl="edit" focusControl_Active="false" focusOrder="2" >
                </div>
              </div>
          </div>
        </div>
        <div class="row-fluid">
          <div class="span6">
              <div class="control-group">
                <label class="control-label">@lang('admin.product')</label>
                <div class="controls controls-row">
                    <select class="" style="cursor: pointer; width: max-content;" id="productEdit" focusType ="true" focusControl="edit" focusControl_Active="false" focusOrder="3" >
                      <option value="1" >UMA_TL</option>
                      <option value="2" >APE_TL</option>
                      <option value="3" >SEI_TL</option>
                      <option value="4" >MINA_TL</option>
                    </select>
                </div>
              </div>
          </div>
          <div class="span6">
              <div class="control-group">
                <label class="control-label">@lang('admin.statusSelect')</label>
                <div class="controls controls-row">
                    <select class="" style="cursor: pointer; width: max-content;" id="statusEdit" focusType ="true" focusControl="edit" focusControl_Active="false" focusOrder="4" >
                      <option value="1" >@lang('admin.active')</option>
                      <option value="0" >@lang('admin.passive')</option>
                    </select>
                </div>
              </div>
          </div>
        </div>
        <div class="row-fluid">
          <div class="span6">
              <div class="control-group">
                <label class="control-label">@lang('admin.purchaseAmount')</label>
                <div class="controls controls-row">
                  <input type="number" class="input-block-level" name="purchaseAmountEdit" id="purchaseAmountEdit" placeholder="0"  focusType ="true" focusControl="edit" focusControl_Active="false" focusOrder="5" >
                </div>
              </div>
          </div>
          <div class="span6">
              <div class="control-group">
                <label class="control-label">@lang('admin.purchaseUnitPrice')</label>
                <div class="controls controls-row">
                  <input type="number" class="input-block-level" name="purchaseUnitPriceEdit" id="purchaseUnitPriceEdit" placeholder="0"  focusType ="true" focusControl="edit" focusControl_Active="false" focusOrder="6" >
                </div>
              </div>
          </div>
        </div> 
        <div class="row-fluid">
          <div class="span6">
              <div class="control-group">
                <label class="control-label">@lang('admin.total')</label>
                <div class="controls controls-row">
                  <label class="control-label" name="totalEdit" id="totalEdit" >0</label>
                </div>
              </div>
          </div>
          <div class="span6">
              <div class="control-group">
                <label class="control-label">@lang('admin.purchaseAmount') Net</label>
                <div class="controls controls-row">
                  <input type="number" class="input-block-level" name="purchaseAmountNetEdit" id="purchaseAmountNetEdit" placeholder="0"  focusType ="true" focusControl="edit" focusControl_Active="true" focusOrder="7" >
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
  <!----  Modal Satış Güncelle Son -->

  <!----  Modal Ekleme -->
  <div id="addModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="addModalLabel">@lang('admin.newAdd')</h3>
        <div id='loaderAdd' style="display: none;width: 20px;"><img src="/upload/images/loader.gif" alt=""></div>
      </div>
      <div class="modal-body">
        <div class="row-fluid">
          <div class="span6">
              <div class="control-group">
                <label class="control-label">@lang('admin.date')</label>
                <div class="controls controls-row">
                  <input type="date" class="input-block-level" name="dateAdd" id="dateAdd" placeholder="0"  focusType ="true" focusControl="add" focusControl_Active="false" focusOrder="1" >
                </div>
              </div>
          </div>
          <div class="span6">
              <div class="control-group">
                <label class="control-label">@lang('admin.date') Full</label>
                <div class="controls controls-row">
                  <input type="text" class="input-block-level" name="dateFullAdd" id="dateFullAdd" placeholder=""  focusType ="true" focusControl="add" focusControl_Active="false" focusOrder="2" >
                </div>
              </div>
          </div>
        </div>
        <div class="row-fluid">
          <div class="span6">
              <div class="control-group">
                <label class="control-label">@lang('admin.type')</label>
                <div class="controls controls-row" style=" display: flex; gap: 10px;" >
                  
                  <div style="display: block;" >
                    <input type="radio" id="saleControlAdd" name="typeControlAdd" value="saleControl" style="position: absolute; cursor:pointer;" checked >  
                    <label for="saleControlAdd" style="margin-left: 15px;font-size: 12px;" >@lang('admin.sale')</label>
                  </div>
                  <div style="display: block;" >
                    <input type="radio" id="purchaseControlAdd" name="typeControlAdd" value="purchaseControl" style="position: absolute; cursor:pointer;" >  
                    <label for="purchaseControlAdd" style="margin-left: 15px;font-size: 12px;" >@lang('admin.purchase')</label>
                  </div>

                 </div>
              </div>
          </div>
          <div class="span6">
              <div class="control-group">
                <label class="control-label">@lang('admin.statusSelect')</label>
                <div class="controls controls-row">
                    <select class="" style="cursor: pointer; width: max-content;" id="statusAdd" >
                      <option value="1" >@lang('admin.active')</option>
                      <option value="0" selected >@lang('admin.passive')</option>
                    </select>
                </div>
              </div>
          </div>
        </div> 
        <div class="row-fluid">
          <div class="span6">
              <div class="control-group">
                <label class="control-label">@lang('admin.amount')</label>
                <div class="controls controls-row">
                  <input type="number" class="input-block-level" name="amountAdd" id="amountAdd" placeholder="0"  focusType ="true" focusControl="add" focusControl_Active="false" focusOrder="3" >
                </div>
              </div>
          </div>
          <div class="span6">
              <div class="control-group">
                <label class="control-label">@lang('admin.unitPrice')</label>
                <div class="controls controls-row">
                  <input type="number" class="input-block-level" name="unitPriceAdd" id="unitPriceAdd" placeholder="0"  focusType ="true" focusControl="add" focusControl_Active="true" focusOrder="4" >
                </div>
              </div>
          </div>
        </div> 
        <div class="row-fluid" id="saleValuesAdd">
          <div class="span4">
              <div class="control-group">
                <label class="control-label">@lang('admin.total')</label>
                <div class="controls controls-row">
                  <label class="control-label" name="totalAdd" id="totalAdd" >0</label>
                </div>
              </div>
          </div>
          <div class="span4">
              <div class="control-group">
                <label class="control-label">@lang('admin.profit_loss')</label>
                <div class="controls controls-row">
                  <label class="control-label" name="profit_lossAdd" id="profit_lossAdd" >0</label>
                </div>
              </div>
          </div>
          <div class="span4">
              <div class="control-group">
                <label class="control-label">@lang('admin.percent')</label>
                <div class="controls controls-row">
                  <label class="control-label" name="percentAdd" id="percentAdd" >0</label>
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
          <div class="span6">
              <div class="control-group">
                <label class="control-label">@lang('admin.date')</label>
                <div class="controls controls-row">
                  <input type="date" class="input-block-level" name="dateEdit" id="dateEdit" placeholder="0"  focusType ="true" focusControl="edit" focusControl_Active="false" focusOrder="1" >
                </div>
              </div>
          </div>
          <div class="span6">
              <div class="control-group">
                <label class="control-label">@lang('admin.date') Full</label>
                <div class="controls controls-row">
                  <input type="text" class="input-block-level" name="dateFullEdit" id="dateFullEdit" placeholder=""  focusType ="true" focusControl="edit" focusControl_Active="false" focusOrder="2" >
                </div>
              </div>
          </div>
        </div>
        <div class="row-fluid">
          <div class="span6">
              <div class="control-group">
                <label class="control-label">@lang('admin.type')</label>
                <div class="controls controls-row" style=" display: flex; gap: 10px;" >
                  
                  <div style="display: block;" >
                    <input type="radio" id="saleControlEdit" name="typeControlEdit" value="saleControl" style="position: absolute; cursor:pointer;" checked >  
                    <label for="saleControlEdit" style="margin-left: 15px;font-size: 12px;" >@lang('admin.sale')</label>
                  </div>
                  <div style="display: block;" >
                    <input type="radio" id="purchaseControlEdit" name="typeControlEdit" value="purchaseControl" style="position: absolute; cursor:pointer;" >  
                    <label for="purchaseControlEdit" style="margin-left: 15px;font-size: 12px;" >@lang('admin.purchase')</label>
                  </div>

                 </div>
              </div>
          </div>
          <div class="span6">
              <div class="control-group">
                <label class="control-label">@lang('admin.statusSelect')</label>
                <div class="controls controls-row">
                    <select class="" style="cursor: pointer; width: max-content;" id="statusEdit" >
                      <option value="1" >@lang('admin.active')</option>
                      <option value="0" selected >@lang('admin.passive')</option>
                    </select>
                </div>
              </div>
          </div>
        </div> 
        <div class="row-fluid">
          <div class="span6">
              <div class="control-group">
                <label class="control-label">@lang('admin.amount')</label>
                <div class="controls controls-row">
                  <input type="number" class="input-block-level" name="amountEdit" id="amountEdit" placeholder="0"  focusType ="true" focusControl="edit" focusControl_Active="false" focusOrder="3" >
                </div>
              </div>
          </div>
          <div class="span6">
              <div class="control-group">
                <label class="control-label">@lang('admin.unitPrice')</label>
                <div class="controls controls-row">
                  <input type="number" class="input-block-level" name="unitPriceEdit" id="unitPriceEdit" placeholder="0"  focusType ="true" focusControl="edit" focusControl_Active="true" focusOrder="4" >
                </div>
              </div>
          </div>
        </div> 
        <div class="row-fluid" id="saleValuesEdit">
          <div class="span4">
              <div class="control-group">
                <label class="control-label">@lang('admin.total')</label>
                <div class="controls controls-row">
                  <label class="control-label" name="totalEdit" id="totalEdit" >0</label>
                </div>
              </div>
          </div>
          <div class="span4">
              <div class="control-group">
                <label class="control-label">@lang('admin.profit_loss')</label>
                <div class="controls controls-row">
                  <label class="control-label" name="profit_lossEdit" id="profit_lossEdit" >0</label>
                </div>
              </div>
          </div>
          <div class="span4">
              <div class="control-group">
                <label class="control-label">@lang('admin.percent')</label>
                <div class="controls controls-row">
                  <label class="control-label" name="percentEdit" id="percentEdit" >0</label>
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
    <script src="{{asset('/assets/admin')}}/js/finance/orders_details.js"></script>
        
    <!-- Yıldırımdev Table JS -->
    <script src="{{asset('/assets/admin/yildirimdev')}}/js/yildirimdev_table.js"></script>

  </footer>

</body>
<!-- END BODY -->
</html>
