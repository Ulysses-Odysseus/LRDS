          <form role="search" method="get" id="searchform" action="<?= esc_url(home_url('/')); ?>" >
            <div class="row">
              <div class="ten columns">
                <input type="text" name="s" id="s" onfocus="if(this.value == 'Search the Blog...') { this.value = ''; }" value="Search the Blog..." />
              </div>
              <div class="two columns">
                <input type="submit" id="searchsubmit">
              </div>
            </div>
          </form>