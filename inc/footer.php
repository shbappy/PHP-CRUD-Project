<footer>
			

</footer>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>


   <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script> 
   <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script> 

   <script type="text/javaScript">
        // Example starter JavaScript for disabling form submissions if there are invalid fields
            (() => {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            const forms = document.querySelectorAll('.needs-validation')

            // Loop over them and prevent submission
            Array.from(forms).forEach(form => {
                form.addEventListener('submit', event => {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                }

                form.classList.add('was-validated')
                }, false)
            })
            })()
    </script>
    <script type="text/javascript">
                $(document).ready(function () {
            $('#usersData').DataTable();
        });
    </script>
    </body>
</html>