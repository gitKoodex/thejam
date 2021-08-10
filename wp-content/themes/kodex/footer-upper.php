<footer class="container-fluid p-0" id="upperFooter">
    <div class="position-relative">
        <div class="therdbg"></div>
        <div class="light-greencover"></div>
        <div class="no-mb-ziro-position w-100 text-white main-padding form-height">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-8">
                        <?php if (dynamic_sidebar('Footer-Column-1')) : else : endif; ?>
                    </div>
                    <div class="col-12 col-md-4">
                        <?php if (dynamic_sidebar('Footer-Column-2')) : else : endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>