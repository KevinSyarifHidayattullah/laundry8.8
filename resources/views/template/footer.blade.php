        <!-- footer content -->
        <footer>
            <div class="pull-right">
              Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
            </div>
            <div class="clearfix"></div>
          </footer>
          <!-- /footer content -->
        </div>
      </div>
  
      <!-- jQuery -->
      <script src="{{asset('assets')}}/vendors/jquery/dist/jquery.min.js"></script>
      <script src="{{ asset('assets') }}/vendors/datatables/js/jquery.datatables.js"></script>
      <!-- Bootstrap -->
     <script src="{{asset('assets')}}/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
      <!-- FastClick -->
      <script src="{{asset('assets')}}/vendors/fastclick/lib/fastclick.js"></script>
      <!-- NProgress -->
      <script src="{{asset('assets')}}/vendors/nprogress/nprogress.js"></script>
      <!-- jQuery custom content scroller -->
      <script src="{{asset('assets')}}/vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
  
      <!-- Custom Theme Scripts -->
      <script src="{{asset('assets')}}/build/js/custom.min.js"></script>
      {{-- <script>
        $(function(){
          $('#succes-alert').fadeTo(2000,500).slideUp(500,function(){
            $('#succes->alert')slideUp(500)
          });
        })
      </script> --}}
      @stack('script')
    </body>
</html>