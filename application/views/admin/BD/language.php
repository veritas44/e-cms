<!DOCTYPE html5>
<html>
<head>
    <title>Title</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/a_style.css">

    <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>css/ui-lightness/jquery-ui-1.10.1.custom.min.css" />
    <script type="text/javascript" src="<?php echo base_url();?>js/jquery-1.9.1.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>js/jquery-ui-1.10.1.custom.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>js/admin.js"></script>
    <script type="text/javascript">

        $(document).ready(function(){
            $('#adminmenu').accordion({fillSpace : false,active : 5 });

        });

    </script>
</head>
<body>
<div id="adminmenu">
    <h3>Configuration</h3>
    <div>

    </div>

    <h3>Catalog</h3>
    <div>
        <li><a href="<?php echo base_url().'admin/categories_products/index/0';?>">Categories/Products</a></li>
        <li><a href="<?php echo base_url().'admin/products_options/index/0';?>">Products Options</a></li>
        <li><a href="<?php echo base_url().'admin/option_values/index/0';?>">Products Options Values</a></li>
        <li><a href="<?php echo base_url().'admin/products_attributes/index/0';?>">Products Attributes</a></li>
        <li><a href="<?php echo base_url().'admin/product_figures/index/0';?>">Products Figures</a></li>
        <li><a href="<?php echo base_url().'admin/manufacturer';?>">Manufacturers</a></li>
        <li><a href="">Reviews</a></li>
        <li><a href="">Specials</a></li>
        <li><a href="">Products Expected</a></li>
    </div>

    <h3>Modules</h3>
    <div>
    </div>

    <h3>Customers</h3>
    <div>
    </div>

    <h3>Location/Taxes</h3>
    <div>
        <li><a href="<?php echo base_url().'admin/country';?>">Countries</a></li>
        <li><a href="<?php echo base_url().'admin/tax_class';?>">Tax Classes</a></li>
        <li><a href="<?php echo base_url().'admin/tax_rate';?>">Tax Rates</a></li>
    </div>

    <h3>Localization</h3>
    <div>
        <li><a href="<?php echo base_url().'admin/language';?>">Languages</a></li>
        <li><a href="<?php echo base_url().'admin/categories_products/index/0';?>">Currencies</a></li>
    </div>
    <h3>Reports</h3>
    <div>
    </div>
    <h3>Tools</h3>
    <div>
    </div>

</div>

<div id="content">
    <h2>Languages</h2>
    <div id="records">
        <table id="common">
            <thead>
            <tr>
                <th>Language</th>
                <th>Code</th>
                <th>Sort Order</th>
                <th>Image</th>
                <th>Action</th>

            </tr>
            </thead>
            <?php if($rows):foreach($rows as $r):?>
                <tr>
                    <td><?php echo $r->name;?></td>
                    <td><?php echo $r->code;?></td>
                    <td><?php echo $r->sort_order;?></td>
                    <td>
                        <img width="50" height="35" src="<?php echo base_url();?>images/languages/<?php echo $r->language_id;?>.<?php echo $r->image_ext;?>"/>
                    </td>
                    <td>
                        <a class="button" href="<?php echo base_url();?>admin/language/edit/<?php echo $r->language_id;?>">Edit</a>&nbsp;
                        <a class="button redirect('admin/country');" href="<?php echo base_url();?>admin/language/delete/<?php echo $r->language_id;?>">Delete</a>
                    </td>

                </tr>
            <?php endforeach; endif;?>
        </table>
        <?php if($action == 'view'):?>
            <div id="add_new">
                <a class="button" id="addnew" href="<?php echo base_url();?>admin/language/add">New Language</a>
            </div>
        <?php endif;?>
    </div>

    <?php if($action != 'view'):?>
        <div id="side_bar">
            <p>Fields marked as * are required.</p>
            <form action="<?php echo base_url().'admin/language/'.$action;?>" method="post" enctype="multipart/form-data" id="my_form">
                <p><label>Language Name<label><input type="text" id="language" name="language_name" value="<?php echo $language_name;?>"/></p>
                <p><label>Code<label><input type="text" id="code" name="code" value="<?php echo $code;?>"/></p>
                <p><label>Sort Order<label><input type="text" id="sort_order" name="sort_order" value="<?php echo $sort_order;?>"/></p>
                <p><label>Flag(image)</label><input type="file" id="image_file" name="image_file"/></p>
                <p class="error">*Allowed types are jpg,jpeg,png,gif.</p>
                <p><a class="button" id="submit_button">Save</a>&nbsp;<a class="button" href="<?php echo base_url();?>admin/language">Cancel</a></p>

            </form>
        </div>
    <?php endif;?>

</div>

</body>
</html>