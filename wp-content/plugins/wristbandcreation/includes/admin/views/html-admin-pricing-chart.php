<div id="pricing_tab_data" class="panel woocommerce_options_panel">
    <div class="options_group">
        <p class="form-field pricing-chart-field">
            <label for="_pc_inch">Pricing Chart</label>
            <span class="wrap">
                <select name="_pc_inch" id="_pc_inch" class="select">
                    <option value="0">Inch.</option>
                    <option value="1/4">1/4</option>
                    <option value="1/2">1/2</option>
                    <option value="3/4">3/4</option>
                    <option value="1">1</option>
                    <option value="1.5">1.5</option>
                    <option value="2">2</option>
                </select>
                <input type="number" name="_pc_qty" id="_pc_qty" class="input-text wc_input_decimal" placeholder="Qty">
                <input type="number" name="_pc_price" id="_pc_price" class="input-text wc_input_decimal" placeholder="Price">
                <a class="button add_pricing_chart_action">Go</a>
            </span>

        </p>
    </div>

    <div class="options_group">
        <table class="wp-list-table widefat fixed striped posts">
            <thead>
                <tr>
                    <th>Inch.</th>
                    <th>Qty</th>
                    <th>Price</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <!-- Display if no data -->
                <tr>
                    <td colspan="4" class="text-center">
                        <strong>No Pricing Charts.</strong>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>