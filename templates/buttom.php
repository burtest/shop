</div>

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2017</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="js/cabinet.js"></script>
    <script src="js/main.js"></script>
    <script src="js/cartinka.js"></script>
	<?
	if(!empty($scripts)){
		foreach($scripts as $script){
	?>
			<script src="<?=$script?>"></script>
<?	
		}	
	}
?>
  </body>

</html>
