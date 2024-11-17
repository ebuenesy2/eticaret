<!DOCTYPE html>

<!-- Head -->
<title> @lang('admin.menuList') | {{ config('admin.Admin_Title') }} </title>
@include('admin.include.head')

<!-- Tanım -->
<?php $homeUrl = '/admin'; ?>
<?php $listTitle = __('admin.menuList'); ?>
<?php $listUrl = "/admin/setting/menu";  ?>

<!-- BEGIN BODY -->
<body class="fixed-top" id="listInfoData" page={{$page}} rowCountData={{$rowcount}} orderData={{$order}} > 
    
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

                          <!------ Arama Menu ----->
                          <div style="display: flex;flex-direction: column;" >
                            <p>Menu</p>
                            <select class="" style="cursor: pointer; width: 120px;" id="searchTable" searchName="Menu"  >
                                <option value="" selected>@lang('admin.all')</option>
                                <option value="0"> @lang('admin.home') [0] </option> 
                                @for ($i = 0; $i < count($DB_MenuFind); $i++)
                                  @if( __('admin.lang') == "en") <option value="{{$DB_MenuFind[$i]->id}}"> {{$DB_MenuFind[$i]->en}}</option> 
                                  @elseif ( __('admin.lang') == "en") <option value="{{$DB_MenuFind[$i]->id}}"> {{$DB_MenuFind[$i]->de}}</option> 
                                  @else <option value="{{$DB_MenuFind[$i]->id}}"> {{$DB_MenuFind[$i]->tr}}</option> 
                                  @endif
                                @endfor
                            </select>
                          </div>
                          <!------ Arama Menu Son----->

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

                        <!------ Tablo Ayarları -->
                        <div id="choosedPanel" class="row-fluid"  style="margin-top:10px;display: none;gap: 5px;flex-wrap: wrap;" >
                        
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

                        <p> page: {{$page}}</p>
                        <p> Sayısı: {{count($dbFind)}}</p>
                        <p>{{$dbSize}} / {{$dbTop}}</p>
                        
                        <!------  Tablo ----->
                        <div id="editable-sample_wrapper" class="row-fluid" role="grid">
                            
                          <table class="table table-striped table-hover table-bordered dataTable" id="customers" aria-describedby="editable-sample_info">
                              <thead>
                                  
                                <!---- Tümü Seç --->
                                <th style="margin: auto;"><input type="checkbox" id="showAllRows" value="all"  data_count="0"  data_value=""  ></th>

                                <th role="columnheader" rowspan="1" colspan="1" >ID</th>
                                <th role="columnheader" rowspan="1" colspan="1" >Sıralama</th>
                                <th role="columnheader" rowspan="1" colspan="1" >Slug</th>
                                <th role="columnheader" rowspan="1" colspan="1" >Parent_id</th>
                                <th role="columnheader" rowspan="1" colspan="1" >Route Name</th>
                                <th role="columnheader" rowspan="1" colspan="1" >TR</th>
                                <th role="columnheader" rowspan="1" colspan="1" >EN</th>
                                <th role="columnheader" rowspan="1" colspan="1" exportName="isActive" exportType="number" >@lang('admin.status')</th>
                              
                                <th role="columnheader" rowspan="1" colspan="1" >@lang('admin.actions')</th>

                              </thead>
                            <tbody role="alert" aria-live="polite" aria-relevant="all">
                            
                              @for ($i = 0; $i < count($dbFind); $i++)
                              <tr>

                                  <!---- Seç --->
                                  <td class="c-table__cell"><input type="checkbox" id="checkItem" data_check_id="{{$dbFind[$i]->id}}" > </td>

                                  <td class="">{{$dbFind[$i]->id}}</td>
                                  <td class="">{{$dbFind[$i]->orderId}}</td>
                                  <td class="">{{$dbFind[$i]->slug}}</td>
                                  <td class="">{{$dbFind[$i]->parent_id}}</td>
                                  <td class="">{{$dbFind[$i]->route_name}}</td>
                                  <td class="">{{$dbFind[$i]->tr}}</td>
                                  <td class="">{{$dbFind[$i]->en}}</td>
                                  <td style="display: flex;" >
                                    <span style="margin: auto;" class="alert {{$dbFind[$i]->isActive ? 'alert-success' : 'alert-error' }}" data_value="{{$dbFind[$i]->isActive}}" >{{$dbFind[$i]->isActive ? __('admin.active') : __('admin.passive')  }}</span>
                                  </td>

                                  <td>
                                    <button class="btn {{$dbFind[$i]->isActive ? 'btn-success ' : 'btn-danger '}}" id="statusItem" data_id="{{$dbFind[$i]->id}}" data_isActive="{{$dbFind[$i]->isActive}}"  ><i data_id="{{$dbFind[$i]->id}}" data_isActive="{{$dbFind[$i]->isActive}}"  class="{{$dbFind[$i]->isActive ? 'icon-eye-open' : ' icon-eye-close'}}"></i></button>
                                    <button class="btn btn-success" title="clone" id="cloneItem" data_id="{{$dbFind[$i]->id}}" ><i data_id="{{$dbFind[$i]->id}}" class=" icon-copy"></i></button>
                                    @if($i !=0 )  <button class="btn btn-info" id="orderItem"  data_location="up"   data_id="{{$dbFind[$i]->id}}"   data_otherId="{{$dbFind[$i-1]->id}}"  >  <i  data_location="up"  data_id="{{$dbFind[$i]->id}}"  data_otherId="{{$dbFind[$i-1]->id}}"  class="fa fa-arrow-up"></i></button> @endif
                                    @if($i+1 != count($dbFind) )<button class="btn btn-info" id="orderItem"  data_location="down" data_id="{{$dbFind[$i]->id}}"   data_otherId="{{$dbFind[$i+1]->id}}" >   <i  data_location="down" data_id="{{$dbFind[$i]->id}}"  data_otherId="{{$dbFind[$i+1]->id}}"  class="icon-arrow-down"></i></button>@endif
                                    <button class="btn btn-primary" title="modal edit"  id="editItem" href="#editModal" data-toggle="modal" data_id="{{$dbFind[$i]->id}}" ><i data_id="{{$dbFind[$i]->id}}" class="icon-pencil"></i></button>
                                    @if($dbFind[$i]->created_byId  == $CookieData['yildirimdev_userID'] || $CookieData['yildirimdev_userID'] == 0 )   <button class="btn btn-danger" id="deleteItem" data_id="{{$dbFind[$i]->id}}"><i data_id="{{$dbFind[$i]->id}}" class="icon-trash "></i></button> @endif
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
                <label class="control-label">Parent - Menu</label>
                <select  class="span12"  name="topMenuAdd" id="topMenuAdd" >
                   <option value="0"> @lang('admin.home') [0] </option> 
                    @for ($i = 0; $i < count($DB_MenuFind); $i++)
                       @if( __('admin.lang') == "en") <option value="{{$DB_MenuFind[$i]->id}}"> {{$DB_MenuFind[$i]->en}}</option> 
                       @elseif ( __('admin.lang') == "en") <option value="{{$DB_MenuFind[$i]->id}}"> {{$DB_MenuFind[$i]->de}}</option> 
                       @else <option value="{{$DB_MenuFind[$i]->id}}"> {{$DB_MenuFind[$i]->tr}}</option> 
                       @endif
                    @endfor
                </select>
              </div>
          </div>
        </div>
        <div class="row-fluid">
          <div class="span6">
              <div class="control-group">
                  <label class="control-label">Slug</label>
                  <div class="controls controls-row">
                      <input type="text" class="input-block-level" name="slugAdd" id="slugAdd" placeholder="Slug" value="" focusType ="true" focusControl="add" focusControl_Active="false" focusOrder="1"  >
                  </div>
              </div>
          </div>
          <div class="span6">
              <div class="control-group">
                  <label class="control-label">Route Name</label>
                  <div class="controls controls-row">
                      <input type="text" class="input-block-level" name="routeNameAdd" id="routeNameAdd" placeholder="route.name" value="" focusType ="true" focusControl="add" focusControl_Active="false" focusOrder="2" >
                  </div>
              </div>
          </div>
         
        </div>
        <div class="row-fluid">
          <div class="span6">
              <div class="control-group">
                  <label class="control-label">TR</label>
                  <div class="controls controls-row">
                      <input type="text" class="input-block-level" name="trAdd" id="trAdd" placeholder="TR" value="" focusType ="true" focusControl="add" focusControl_Active="false" focusOrder="3"  >
                  </div>
              </div>
          </div>
          <div class="span6">
              <div class="control-group">
                  <label class="control-label">EN</label>
                  <div class="controls controls-row">
                      <input type="text" class="input-block-level" name="enAdd" id="enAdd" placeholder="EN" value="" focusType ="true" focusControl="add" focusControl_Active="true" focusOrder="4"  >
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
                <label class="control-label">Parent - Menu</label>
                <select  class="span12"  name="topMenuEdit" id="topMenuEdit" >
                   <option value="0"> @lang('admin.home') [0] </option> 
                    @for ($i = 0; $i < count($DB_MenuFind); $i++)
                       @if( __('admin.lang') == "en") <option value="{{$DB_MenuFind[$i]->id}}"> {{$DB_MenuFind[$i]->en}}</option> 
                       @elseif ( __('admin.lang') == "en") <option value="{{$DB_MenuFind[$i]->id}}"> {{$DB_MenuFind[$i]->de}}</option> 
                       @else <option value="{{$DB_MenuFind[$i]->id}}"> {{$DB_MenuFind[$i]->tr}}</option> 
                       @endif
                    @endfor
                </select>
              </div>
          </div>
        </div>
        <div class="row-fluid">
          <div class="span6">
              <div class="control-group">
                  <label class="control-label">Slug</label>
                  <div class="controls controls-row">
                      <input type="text" class="input-block-level" name="slugEdit" id="slugEdit" placeholder="Slug" value="" focusType ="true" focusControl="edit" focusControl_Active="false" focusOrder="1"  >
                  </div>
              </div>
          </div>
          <div class="span6">
              <div class="control-group">
                  <label class="control-label">Route Name</label>
                  <div class="controls controls-row">
                      <input type="text" class="input-block-level" name="routeNameEdit" id="routeNameEdit" placeholder="route.name" value="" focusType ="true" focusControl="edit" focusControl_Active="false" focusOrder="2" >
                  </div>
              </div>
          </div>
        
        </div>
        <div class="row-fluid">
          <div class="span6">
              <div class="control-group">
                  <label class="control-label">TR</label>
                  <div class="controls controls-row">
                      <input type="text" class="input-block-level" name="trEdit" id="trEdit" placeholder="TR" value="" focusType ="true" focusControl="edit" focusControl_Active="false" focusOrder="3"  >
                  </div>
              </div>
          </div>
          <div class="span6">
              <div class="control-group">
                  <label class="control-label">EN</label>
                  <div class="controls controls-row">
                      <input type="text" class="input-block-level" name="enEdit" id="enEdit" placeholder="EN" value="" focusType ="true" focusControl="edit" focusControl_Active="true" focusOrder="4" >
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
    <script src="{{asset('/assets/admin')}}/js/settings/setting_menuList.js"></script>

  </footer>

</body>
<!-- END BODY -->
</html>