<template>
  <div class="artpack-form">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <section id="container">
    <header>
      <span id="logo"><img src="http://originalpenguinaccessories.com/form/separations/images/logo.png" id="logo" name="logo" alt="PAi Logo"></span>
      <h1>ASI Artpack</h1>
    </header>

    <form method="post" action="" name="containerform" id="containerform" autocomplete="on" class="form-horizontal" role="form">

      <fieldset>

        <legend>Account Information</legend>

        <div class="half">
          <label for="customer_name" accesskey="U">Customer Name</label>
          <input name="customer_name" type="text" id="customer_name" placeholder="" required="required" />
        </div>

        <div class="half">
          <label for="rep_name" accesskey="R">Rep Name<br><small>(optional)</small></label>
          <input name="rep_name" type="text" id="rep_name" placeholder="" />
        </div>

        <div class="half">
          <label for="account_name" accesskey="A">Account Name</label>
          <input name="account_name" type="text" id="account_name" placeholder="" required="required" />
        </div>

        <div class="half">
          <label for="account_num" accesskey="N">Account Number <small>(optional)</small></label>
          <input name="account_num" type="text" id="account_num" placeholder="" />
        </div>

        <div class="half">
          <label for="csr_name" accesskey="S">CSR Name</label>
          <div class="col-2">
            <select id="csr_name" class="selectpicker show-tick form-control" data-live-search="true" multiple data-max-options="1" required="required" />
                            <option value="Joey Knight">
                                  Joey Knight
                            </option>
                            <option value="Wren White">
                                  Wren White
                            </option>
              <option value="Cari White">
                                  Cari White
                            </option>
                            <option value="Tiphani Isom">
                                  Tiphani Isom
                            </option>
                            <option value="Dena Isgrigg">
                  Dena Isgrigg
              </option>
              <option value="Julie Montgomery">
                                Julie Montgomery
                            </option>
                            <option value="Sara Hawkins">
                                  Sara Hawkins
                            </option>
                             <option value="Leeanne Widener">
                  Leeanne Widener
              </option>
              <option value="Angel Talbert">
                  Angel Talbert
              </option>
                            <option value="Lori Beste">
                                Lori Beste
                            </option>
                            <option value="Amber Kitchen">
                                  Amber Kitchen
                            </option>
              <option value="Rachel Bolinger">
                  Rachel Bolinger
              </option>
                            <option value="Terry Licklider">
                  Terry Licklider
              </option>
                            <option value="Tracy Montgomery">
                                  Tracy Montgomery
                            </option>
                          <option value="Grant Clark">
                              Grant Clark
                            </option>
                            <option value="Unassigned">
                  (Unassigned)
                </option>   
            </select>
          </div>
        </div>

        <div class="half">
          <label for="turn_time" accesskey="T">Turn Time</label>
          <div class="col-2">
            <select id="turn_time" class="selectpicker show-tick form-control" multiple data-max-options="1" />
              <option value="2 Days" selected>2 Days</option>
              <option value="Rush">Rush</option>
            </select>
          </div>
        </div>

      </fieldset>

      <fieldset>

        <legend>Artpack Details</legend>

        <div class="half">
          <label for="reference_tapes" accesskey="K">Artpack Name </label>
          <input name="reference_tapes" type="text" id="reference_tapes" placeholder="" required="required" />
        </div>

        <div class="half">
          <label for="reference_tapes" accesskey="E">Reference Art <br /><small>(optional)</small></label>
          <input name="reference_tapes" type="text" id="reference_tapes" placeholder="" />
        </div>

        <!-- OLD PACKAGE TYPE SELECTOR 
        <div>
        <label for="package_type" accesskey="P">Package Type <br><small>(select all that apply)</small></label>
          <div style="width:588px;float:left;">
            <select id="package_type" class="selectpicker show-tick form-control" multiple data-max-options="5" required="required" />
              <option>Domestic</option>
              <option>Q30</option>
              <option>C60</option>
              <option>Full Custom</option>
              <option>Core 24</option>
            </select>
          </div>
        </div> -->

        <div ng-app>
          <label for="package_type" accesskey="P">Package Type<br><small>(enter quantity)</small></label>
          <div class="checkarea">
            <div>
              <label>
              <input ng-model="domestic" type="number">Domestic</label>
            </div>

            <div>
              <label>
              <input ng-model="q30" type="number"">Q30</label>
            </div>

            <div>
              <label>
              <input ng-model="c60" type="number">C60</label>
            </div>

            <div>
              <label>
              <input ng-model="full_custom" type="number"">Full Custom</label>
            </div>

            <div>
              <label>
              <input ng-model="core_24" type="number">Core 24</label>
            </div>

            <div>
              <label style="font-weight:bold"><input type="number" value="" readonly disabled>Total Designs</label>
            </div>
          </div>
        </div>

        <div>
          <label for="style_preference" accesskey="Y">Style Preference <br><small>(select all that apply)</small></label>
          <div class="checkarea">
            <div class="checkbox">
              <label>
              <input name="style_preference[]" type="checkbox" id="golf_resort"/><span>Golf/Resort</span></label>
            </div>
            <div class="checkbox">
              <label>
              <input name="style_preference[]" type="checkbox" id="corporate"/><span>Corporate</span></label>
            </div>
            <div class="checkbox">
              <label>
              <input name="style_preference[]" type="checkbox" id="camo_outdoor"/><span>Camo/Outdoor</span></label>
            </div>
            <div class="checkbox">
              <label>
              <input name="style_preference[]" type="checkbox" id="extreme"/><span>Extreme</span></label>
            </div>
            <div class="checkbox">
              <label>
              <input name="style_preference[]" type="checkbox" id="performance"/><span>Performance</span></label>
            </div>
            <div class="checkbox">
              <label>
              <input name="style_preference[]" type="checkbox" id="winter_knit"/><span>Winter/Knit</span></label>
            </div>
            <div class="checkbox">
              <label>
              <input name="style_preference[]" type="checkbox" id="distressed"/><span>Distressed</span></label>
            </div>
            <div class="checkbox">
              <label>
              <input name="style_preference[]" type="checkbox" id="trucker"/><span>Trucker</span></label>
            </div>
            <div class="checkbox">
              <label>
              <input name="style_preference[]" type="checkbox" id="Other"/><span>Other</span></label>
            </div>
          </div>
        </div>

        <div class="half">
          <label for="logo_manip" accesskey="L" class="toggle-check">Logo Manipulation</label>
          <div class="checkarea" style="width:auto !important; margin:8px 0;">
                 <div>
                    <input id="logo_manip" class="cmn-toggle cmn-toggle-yes-no" type="checkbox">
                    <label for="logo_manip" data-on="Yes" data-off="No"></label>
            </div>
          </div>
        </div>

        <div>
          <label for="comments" accesskey="C">Comments</label>
          <textarea name="comments" cols="40" rows="8" id="comments" placeholder="Enter your comments" spellcheck="true" required="required"></textarea>
        </div>

      </fieldset>

      <input type="submit" class="submit" id="submit" value="Submit" />

    </form>
  </div>
</template>
<script>
  module.exports = require('./js/artpack-form.js')
</script>