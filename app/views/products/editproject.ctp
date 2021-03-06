{\rtf1\ansi\ansicpg936\deff0\deflang1033\deftab420{\fonttbl{\f0\fnil\fcharset134 \'cb\'ce\'cc\'e5;}{\f1\froman\fcharset0 Times New Roman;}}
{\*\generator Msftedit 5.41.15.1507;}\viewkind4\uc1\pard\lang2052\f0\fs20 <div class="products index">\par
\tab <h2><?php __('Products');?></h2>\par
\tab <table cellpadding="0" cellspacing="0">\par
\tab <tr>\par
\tab\tab\tab <th><?php echo $this->Paginator->sort('id');?></th>\par
\tab\tab\tab <th><?php echo $this->Paginator->sort('title');?></th>\par
\tab\tab\tab <th><?php echo $this->Paginator->sort('description');?></th>\par
\tab\tab\tab <th><?php echo $this->Paginator->sort('mpd_class');?></th>\par
\tab\tab\tab <th><?php echo $this->Paginator->sort('date_presented');?></th>\par
\tab\tab\tab <th><?php echo $this->Paginator->sort('patent_number');?></th>\par
\tab\tab\tab <th class="actions"><?php __('Actions');?></th>\par
\tab </tr>\par
\tab <?php\par
\tab $i = 0;\par
\tab foreach ($products as $product):\par
\tab\tab $class = null;\par
\tab\tab if ($i++ % 2 == 0) \{\par
\tab\tab\tab $class = ' class="altrow"';\par
\tab\tab\}\par
\tab ?>\par
\tab <tr<?php echo $class;?>>\par
\tab\tab <td><?php echo $product['Product']['id']; ?>&nbsp;</td>\par
\tab\tab <td><?php echo $product['Product']['title']; ?>&nbsp;</td>\par
\tab\tab <td><?php echo $product['Product']['description']; ?>&nbsp;</td>\par
\tab\tab <td><?php echo $product['Product']['mpd_class']; ?>&nbsp;</td>\par
\tab\tab <td><?php echo $product['Product']['date_presented']; ?>&nbsp;</td>\par
\tab\tab <td><?php echo $product['Product']['patent_number']; ?>&nbsp;</td>\par
\tab\tab <td class="actions">\par
\tab\tab\tab <?php echo $this->Html->link(__('View', true), array('action' => 'view', $product['Product']['id'])); ?>\par
\tab\tab\tab <?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $product['Product']['id'])); ?>\par
\tab\tab\tab <?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $product['Product']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $product['Product']['id'])); ?>\par
\tab\tab </td>\par
\tab </tr>\par
<?php endforeach; ?>\par
\tab </table>\par
\tab <p>\par
\tab <?php\par
\tab echo $this->Paginator->counter(array(\par
\tab 'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)\par
\tab ));\par
\tab ?>\tab </p>\par
\par
\tab <div class="paging">\par
\tab\tab <?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>\par
\tab  | \tab <?php echo $this->Paginator->numbers();?>\par
 |\par
\tab\tab <?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>\par
\tab </div>\par
</div>\par
<div class="actions">\par
\tab <h3><?php __('Actions'); ?></h3>\par
\tab <ul>\par
\tab\tab <li><?php echo $this->Html->link(__('New Product', true), array('action' => 'add')); ?></li>\par
\par
\tab </ul>\par
</div>\par
\pard\nowidctlpar\qj\lang1033\kerning2\f1\fs21\par
}
 