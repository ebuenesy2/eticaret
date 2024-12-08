<!DOCTYPE html>


<!-- Tanım -->
<?php $homeUrl = '/admin'; ?>
<?php $listTitle = __('admin.testList'); ?>
<?php $listUrl = "/admin/fixed_list";  ?>

<!-- Head -->
<title> <?php echo $listTitle; ?>  | {{ config('admin.Admin_Title') }} </title>
@include('admin.include.head')

<!-- Yıldırımdev Table Css -->
<link href="{{asset('/assets/admin/yildirimdev')}}/css/yildirimdev_table.css" rel="stylesheet" type="text/css" />

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
                          

                          <!-- Sayfa -->
                          <a href="/@lang('admin.lang'){{$listUrl}}/add"><button class="btn btn-warning">@lang('admin.newAdd') Sayfa <i class="fa fa-plus"></i></button></a>
                          
                          <!-- Modal -->
                          <button class="btn btn-success" href="#addModal" role="button" data-toggle="modal" >
                            <i class="fa fa-plus icon-white"></i> @lang('admin.newAdd') Modal 
                          </button>
                          <!-- Modal Son -->

                          <div id='loader' style="display: flex;width: 20px;"><img src="/upload/images/loader.gif" alt=""></div>

                        </div>                          

                        <!------  Tablo Üst - Arama ----->
                        <div class="row-fluid" style="margin-top:10px;display: flex;gap: 5px;flex-wrap: wrap;" >

                          <!------ Arama ID ----->
                          <div style="display: flex;flex-direction: column;">
                            <p>ID</p>
                            <input type="number" class="" style="width: 120px;"   id="searchTable" searchName="Id" >
                          </div>
                          <!------ Arama ID Son----->

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

                          <!------ Arama Takvim ----->
                          <div style="display: flex;flex-direction: column;" >
                            <p>@lang('admin.createdDate')</p>
                            <input type="date" class="" style="cursor: pointer; width: 120px; cursor: pointer;"  id="searchTable" searchName="CreatedDate" >
                          </div>
                          <!------ Arama Takvim Son----->

                          <!-- Arama Takvim Arası -->
                          <div style="display: flex;flex-direction: column;" >
                            <p>Takvim Az</p>
                            <input type="date" class="" style="cursor: pointer; width: 120px; cursor: pointer;"  id="searchTable" searchName="CreatedDateBottom" >
                          </div>
                          
                          <div style="display: flex;flex-direction: column;" >
                            <p>Takvim Fazla</p>
                            <input type="date" class="" style="cursor: pointer; width: 120px; cursor: pointer;"  id="searchTable" searchName="CreatedDateTop" >
                          </div>
                          <!-- Arama Takvim Arası Son -->

                          <!------ Arama Kullanıcı ----->
                          <div style="display: flex;flex-direction: column;">
                            <p>@lang('admin.user')</p>
                            <input type="text" class="" style="width: 120px;"   id="searchTable" searchName="userId" >
                          </div>
                          <!------ Arama Kullanıcı Son----->

                          <!------ Arama Durum ----->
                          <div style="display: flex;flex-direction: column;">
                            <p>@lang('admin.value')</p>
                            <input type="number" class="" style="width: 120px;"   id="searchTable" searchName="Value" >
                          </div>
                          <!------ Arama Durum Son----->

                          <!------ Arama Arası Az ----->
                          <div style="display: flex;flex-direction: column;">
                            <p>Değer Az</p>
                            <input type="number" class="" style="width: 120px;"   id="searchTable" searchName="ValueBottom" >
                          </div>
                          <!------ Arama Arası Az Son----->

                          <!------ Arama Arası Fazla ----->
                          <div style="display: flex;flex-direction: column;">
                            <p>Değer Fazla</p>
                            <input type="number" class="" style="width: 120px;"   id="searchTable" searchName="ValueTop" >
                          </div>
                          <!------ Arama Arası Fazla Son----->
                          
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
                        
                        <!------  Tablo ----->
                        <div class="table-container">

                          <table>
                              <thead>

                                <!---- Tümü Seç --->
                                <th data-cell="Tümü Seç" style="margin: auto;" exportName="check" exportViewDisplay="false" ><input type="checkbox" id="showAllRows" value="all"  data_count="0"  data_value=""></th>

                                <th class="table_title" exportName="id"  exportType="number" exportViewDisplay="true" >ID</th>
                                <th class="table_title" exportName="name" exportType="text" >@lang('admin.name')</th>
                                <th class="table_title" exportName="surname" exportType="text" >@lang('admin.surname')</th>
                                <th class="table_title" exportName="email"  exportType="text" >@lang('admin.email')</th>
                                <th class="table_title" exportName="value" exportType="text" >@lang('admin.value')</th>
                                <th class="table_title" exportName="img_url" exportType="text" > @lang('admin.image')</th>
                                <th class="table_title" exportName="created_byId" exportType="number" >@lang('admin.user')</th>
                                <th class="table_title" exportName="created_at" exportType="time" >@lang('admin.createdDate')</th>
                                <th class="table_title" exportName="isActive" exportType="number" >@lang('admin.status')</th>
                                <th class="table_title" exportName="actions"  exportViewDisplay="false" >@lang('admin.actions')</th>
                              
                              </thead>
                            <tbody role="alert" aria-live="polite" aria-relevant="all">
                            
                              @for ($i = 0; $i < count($dbFind); $i++)
                              <tr>

                                  <!---- Seç --->
                                  <td data-cell="Seç" exportViewDisplay="false" ><input type="checkbox" id="checkItem" data_check_id="{{$dbFind[$i]->id}}" > </td>

                                  <td data-cell="ID" >{{$dbFind[$i]->id}}</td>
                                  <td data-cell="@lang('admin.name')" >{{$dbFind[$i]->name}}</td>
                                  <td data-cell="@lang('admin.surname')" >{{$dbFind[$i]->surname}}</td>
                                  <td data-cell="@lang('admin.email')" >{{$dbFind[$i]->email}}</td>
                                  <td data-cell="@lang('admin.value')" >{{$dbFind[$i]->value}}</td>
                                  <td data-cell="@lang('admin.image')" >{{$dbFind[$i]->img_url}}</td>
                                  <td data-cell="@lang('admin.user')" >{{$dbFind[$i]->created_byId}}</td>
                                  <td data-cell="@lang('admin.createdDate')" >{{$dbFind[$i]->created_at}}</td>
                                  <td data-cell="@lang('admin.status')" style="display: flex;" >
                                    <span style="margin: auto;" class="alert {{$dbFind[$i]->isActive ? 'alert-success' : 'alert-error' }}" data_value="{{$dbFind[$i]->isActive}}" >{{$dbFind[$i]->isActive ? __('admin.active') : __('admin.passive')  }}</span>
                                  </td>
                                
                                  <td data-cell="@lang('admin.actions')"  exportViewDisplay="false" >
                                    <button class="btn {{$dbFind[$i]->isActive ? 'btn-success ' : 'btn-danger '}}" id="statusItem" data_id="{{$dbFind[$i]->id}}" data_isActive="{{$dbFind[$i]->isActive}}"  ><i data_id="{{$dbFind[$i]->id}}" data_isActive="{{$dbFind[$i]->isActive}}"  class="{{$dbFind[$i]->isActive ? 'icon-eye-open' : ' icon-eye-close'}}"></i></button>
                                    <button class="btn btn-success" title="clone" id="cloneItem" data_id="{{$dbFind[$i]->id}}" ><i data_id="{{$dbFind[$i]->id}}" class=" icon-copy"></i></button>
                                    <button class="btn btn-info" title="modal arama"  id="searchItem" href="#searchModal" data-toggle="modal" data_id="{{$dbFind[$i]->id}}" ><i data_id="{{$dbFind[$i]->id}}" class="fa fa-search"></i></button>
                                    <a href="/@lang('admin.lang'){{$listUrl}}/search/{{$dbFind[$i]->id}}" title="sayfa arama" ><button class="btn btn-warning" ><i class="fa fa-search"></i></button></a>
                                    <button class="btn btn-primary" title="modal edit"  id="editItem" href="#editModal" data-toggle="modal" data_id="{{$dbFind[$i]->id}}" ><i data_id="{{$dbFind[$i]->id}}" class="fa fa-pencil"></i></button>
                                    <a href="/@lang('admin.lang'){{$listUrl}}/edit/{{$dbFind[$i]->id}}" title="sayfa edit" ><button class="btn btn-warning" ><i class="fa fa-pencil"></i></button></a>
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
                              <option value="5">5</option>
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

  <!----  Modal Arama -->
  <div id="searchModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="searchModalLabel" aria-hidden="true">
      <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h3 id="searchModalTitle" style="display: flex;" ><p>@lang('admin.search') #</p><p id="searchModalValueId">54</p> </h3>
          <div id='loaderSearch' style="display: flex;width: 20px;"><img src="/upload/images/loader.gif" alt=""></div>
      </div>
      <div class="modal-body">
        <div class="row-fluid" >
          <div class="span6">
              <div class="control-group">
                  <label class="control-label">@lang('admin.name')</label>
                  <div class="controls controls-row">
                      <input type="text" class="input-block-level" name="nameSearch" id="nameSearch" placeholder="@lang('admin.name')" value="" >
                  </div>
              </div>
          </div>
          <div class="span6">
              <div class="control-group">
                  <label class="control-label">@lang('admin.surname')</label>
                  <div class="controls controls-row">
                      <input type="text" class="input-block-level" name="surnameSearch" id="surnameSearch" placeholder="@lang('admin.surname')" value="" >
                  </div>
              </div>
          </div>
        </div>
        <div class="row-fluid">
          <div class="span6">
              <div class="control-group">
                  <label class="control-label">@lang('admin.email')</label>
                  <div class="controls controls-row">
                      <input type="email" class="input-block-level" name="emailSearch" id="emailSearch" placeholder="@lang('admin.email')" value="" >
                  </div>
              </div>
          </div>
          <div class="span6">
              <div class="control-group">
                  <label class="control-label">@lang('admin.value')</label>
                  <div class="controls controls-row">
                      <input type="number" class="input-block-level" name="valueSearch" id="valueSearch" placeholder="@lang('admin.value')" value="" >
                  </div>
              </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">@lang('admin.close')</button>
      </div>
  </div>
  <!----  Modal Arama Son -->
  
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
                  <label class="control-label">@lang('admin.name')</label>
                  <div class="controls controls-row">
                      <input type="text" class="input-block-level" name="nameAdd" id="nameAdd" placeholder="@lang('admin.name')" value=""  focusType ="true" focusControl="add"  focusControl_Active="false" focusOrder="1" >
                  </div>
              </div>
          </div>
          <div class="span6">
              <div class="control-group">
                  <label class="control-label">@lang('admin.surname')</label>
                  <div class="controls controls-row">
                      <input type="text" class="input-block-level" name="surnameAdd" id="surnameAdd" placeholder="@lang('admin.surname')" value="" focusType ="true" focusControl="add" focusControl_Active="false" focusOrder="2" >
                  </div>
              </div>
          </div>
        </div>
        <div class="row-fluid">
          <div class="span6">
              <div class="control-group">
                  <label class="control-label">@lang('admin.email')</label>
                  <div class="controls controls-row">
                      <input type="email" class="input-block-level" name="emailAdd" id="emailAdd" placeholder="@lang('admin.email')" value="" focusType ="true" focusControl="add" focusControl_Active="false" focusOrder="3" >
                  </div>
              </div>
          </div>
          <div class="span6">
              <div class="control-group">
                  <label class="control-label">@lang('admin.value')</label>
                  <div class="controls controls-row">
                      <input type="number" class="input-block-level" name="valueAdd" id="valueAdd" placeholder="@lang('admin.value')" value="" focusType ="true" focusControl="add" focusControl_Active="true" focusOrder="4" >
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
                  <label class="control-label">@lang('admin.name')</label>
                  <div class="controls controls-row">
                      <input type="text" class="input-block-level" name="nameEdit" id="nameEdit" placeholder="@lang('admin.name')" value="" focusType ="true" focusControl="edit" focusControl_Active="false" focusOrder="1" >
                  </div>
              </div>
          </div>
          <div class="span6">
              <div class="control-group">
                  <label class="control-label">@lang('admin.surname')</label>
                  <div class="controls controls-row">
                      <input type="text" class="input-block-level" name="surnameEdit" id="surnameEdit" placeholder="@lang('admin.surname')" value=""  focusType ="true" focusControl="edit" focusControl_Active="false" focusOrder="2">
                  </div>
              </div>
          </div>
        </div>
        <div class="row-fluid">
          <div class="span6">
              <div class="control-group">
                  <label class="control-label">@lang('admin.email')</label>
                  <div class="controls controls-row">
                      <input type="email" class="input-block-level" name="emailEdit" id="emailEdit" placeholder="@lang('admin.email')" value="" focusType ="true" focusControl="edit" focusControl_Active="false" focusOrder="3">
                  </div>
              </div>
          </div>
          <div class="span6">
              <div class="control-group">
                  <label class="control-label">@lang('admin.value')</label>
                  <div class="controls controls-row">
                      <input type="number" class="input-block-level" name="valueEdit" id="valueEdit" placeholder="@lang('admin.value')" value=""  focusType ="true" focusControl="edit" focusControl_Active="true" focusOrder="4">
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

    <!------- Footer --->
    @include('admin.include.footer')

    <!------- JS --->
    <script src="{{asset('/assets/admin')}}/js/01_0_sabit_list/00_list_search.js"></script>
    <script src="{{asset('/assets/admin')}}/js/01_0_sabit_list/01_action_list.js"></script>

    <!--------- Jquery  Ajax -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    
    <!-- Yıldırımdev Table JS -->
    <script src="{{asset('/assets/admin/yildirimdev')}}/js/yildirimdev_table.js"></script>

  </footer>

</body>
<!-- END BODY -->
</html>