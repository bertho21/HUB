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
        <option value="batulepuk-data-agama">Desa Batu Lepuk</option>
        <option value="kampunghilir-data-agama">Desa Kampung Hilir</option>
        <option value="kampungmelayu-data-agama">Desa Kampung Melayu</option>
        <option value="kukup-data-agama">Desa Kukup</option>
        <option value="pulaumentebung-data-agama">Desa Pulau Mentebung</option>
       
        <option value="pulaupinang-data-agama">Desa Pulau Pinang</option>
        <option value="pengikik-data-agama">Desa Pengikik</option>
    </select>
    <noscript>
<input type='submit'>
</noscript>
</form>
    </div>
  <br />
</div>
<!-- end -->