<!-- start -->
<script language="javascript" type="text/javascript">
function doReload(catid){
	document.location = 'index.php?page=' + catid;
	
	/* But if you want to submit the form just comment above line and uncomment following lines*/
	//document.frm1.action = 'samepage.php';
	//document.frm1.method = 'post';
	//document.frm1.submit();
}
</script>
<div class="section-wrapper">
  <h4 class="page-header"></h4>
  <div class="row">
    <div class="col-sm-3">
    <form name="frm1" id="frm1">
    <select name="catid" class="form-control"  id="catid" onChange="doReload(this.value);">
        <option value="" selected="selected">Pilih Desa</option>
        <option value="bintanbuyu-wilayah-administratif">Desa Bintan Buyu</option>
        <option value="tembeling-wilayah-administratif">Desa Tembeling </option>
        <option value="penaga-wilayah-administratif">Desa Penaga</option>
        <option value="pengujan-wilayah-administratif">Desa Pengujan </option>
        <option value="pangkil-wilayah-administratif">Desa Pangkil</option>
    </select>
    <noscript>
<input type='submit'>
</noscript>
</form>
    </div>
  <br />
</div>
<!-- end -->