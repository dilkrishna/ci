<?php $this->load->view('admin/admin_header'); ?>
<div class='container'>
    <table class='table'>
        <thead>
            <th>S.No.</th>
            <th>Title</th>
            <th>Action</th>
        </thead>
        <tbody>
            <?php if(count($articles)): ?>
            <?php foreach($articles as $article):  ?>
            <tr>  
            <td>1</td>
            <td> <?php echo $article->title ?> </td> 
            <td>
                <a href="#" class="btn btn-primary">Edit</a>
                <a href="#" class="btn btn-danger">Delete</a>

            </td>
            </tr>
           <?php endforeach; ?>
           <?php else : ?>
            <tr>
                <td colspan="3">
                    No Records found
                </td>
            </tr>
            <?php endif;?>
        </tbody>
    </table>
    
</div>
<?php $this->load->view('admin/admin_footer'); ?>
</body>
</html>
