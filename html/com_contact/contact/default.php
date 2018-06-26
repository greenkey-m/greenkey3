<?php
/**
  * @package     Greenkey3
 * @subpackage  com_contact
 *
 * @copyright   Copyright (C) 2007 - 2018 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
defined('_JEXEC') or die;

jimport('joomla.html.html.bootstrap');

$cparams = JComponentHelper::getParams('com_media');
$tparams = $this->item->params;
?>

<nav>
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Home</a>
    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Profile</a>
    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Contact</a>
  </div>
</nav>
<div class="tab-content" id="nav-tabContent">
  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">1...</div>
  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">2...</div>
  <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">3...</div>
</div>

<div class="contacts">
    <div class="row">

        <div class="col-12 wow fadeup">
            <?php if ($this->params->get('show_page_heading')) : ?>
                <h1>
                    <?php echo $this->escape($this->params->get('page_heading')); ?>
                </h1>
            <?php endif; ?>
            <?php if ($this->contact->name && $this->params->get('show_name')) : ?>
                <div class="page-header">
                    <h2>
                        <?php if ($this->item->published == 0) : ?>
                            <span class="label label-warning"><?php echo JText::_('JUNPUBLISHED'); ?></span>
                        <?php endif; ?>
                        <span class="contact-name" itemprop="name"><?php echo $this->contact->name; ?></span>
                    </h2>
                </div>
            <?php endif; ?>
            <?php if ($this->params->get('show_contact_category') == 'show_no_link') : ?>
                <h3>
                    <span class="contact-category"><?php echo $this->contact->category_title; ?></span>
                </h3>
            <?php endif; ?>
        </div>

        <div class="col-12">

            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <a class="nav-link" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" 
                   aria-controls="v-pills-home" aria-selected="true">Контакты</a>
                <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" 
                   aria-controls="v-pills-profile" aria-selected="false">Схема проезда</a>
                <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" 
                   aria-controls="v-pills-messages" aria-selected="false">Написать нам</a>
            </ul>

            <div class="tab-content" id="v-pills-tabContent">
                
                <div class="tab-pane fade show" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                    <div class="footer-content">
                        <p class="large">
                            ООО «Гидротен»
                        </p>
                        <ul class="list-icons">
                            <li><i class="fa fa-map-marker pr-10"></i>г. Москва, ул. Енисейская д.7, стр.4 оф.15</li>
                            <li><i class="fa fa-map-marker pr-10"></i>г. Москва, ул. Чермянская, 39а (склад)</li>
                            <li><i class="fa fa-phone pr-10"></i>+7 (495) 788-1691</li>
                            <li><i class="fa fa-skype pr-10"></i>andybar71</li>
                            <li><i class="fa fa-envelope-o pr-10"></i>info@gidroten.ru</li>
                        </ul>
                    </div>
                </div>

                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                    <div class="footer-content">
                        <form id="contact-form" role="form" class="scrollimation fade-left" action="/home/contacts" method="post" novalidate>

                            <div class="form-group has-feedback">
                                <label id="jform_contact_name-lbl" for="jform_contact_name" 
                                       class="control-label hasTooltip sr-only" 
                                       title="&lt;strong&gt;Ваше имя&lt;/strong&gt;">
                                    Ваше имя
                                </label>
                                <input  id="jform_contact_name" type="text" 
                                        name="jform[contact_name]" 
                                        class="form-control" 
                                        placeholder="Ваше имя" 
                                        data-error-empty="Пожалуйста, напишите ваше имя">
                                <i class="fa fa-user form-control-feedback"></i>
                            </div>

                            <div class="form-group has-feedback">
                                <label id="jform_contact_email-lbl" for="jform_contact_email" 
                                       class="control-label hasTooltip required sr-only" 
                                       title="&lt;strong&gt;Ваш e-mail&lt;/strong&gt;&lt;br /&gt;Адрес электронной почты контакта">
                                    Ваш e-mail<span class="star">&#160;*</span>
                                </label>
                                <input id="jform_contact_email" type="email" 
                                       name="jform[contact_email]" 
                                       class="validate-email required form-control requiredField" 
                                       placeholder="Ваш e-mail для связи" 
                                       data-error-empty="Пожалуйста, напишите ваш email" 
                                       data-error-invalid="Некорректный email"
                                       required aria-required="true">
                                <i class="fa fa-envelope form-control-feedback"></i>
                            </div>

                            <div class="form-group has-feedback">
                                <label id="jform_contact_emailmsg-lbl" for="jform_contact_emailmsg" 
                                       class="control-label hasTooltip required sr-only" 
                                       title="&lt;strong&gt;Ваш телефон&lt;/strong&gt;&lt;br /&gt;Ваш телефон">
                                    Ваш телефон<span class="star">&#160;*</span>
                                </label>
                                <input id="jform_contact_emailmsg" type="text" 
                                       name="jform[contact_subject]" 
                                       class="required form-control requiredField" 
                                       placeholder="Ваш телефон для связи"
                                       value="" size="60"
                                       data-error-empty="Пожалуйста напишите ваш телефон" 
                                       data-error-invalid="Некорректный номер телефона"
                                       required aria-required="true">
                                <i class="fa fa-phone form-control-feedback"></i>
                            </div>

                            <div class="form-group has-feedback">
                                <label id="jform_contact_message-lbl" for="jform_contact_message" 
                                       class="control-label hasTooltip required sr-only"
                                       title="&lt;strong&gt;Ваше сообщение&lt;/strong&gt;&lt;br /&gt;Введите текст вашего сообщения">
                                    Ваше сообщение<span class="star">&#160;*</span>
                                </label>
                                <textarea id="jform_contact_message" 
                                          name="jform[contact_message]"
                                          class="required form-control requiredField" 
                                          placeholder="О чем вы хотите написать?"
                                          rows="4" 
                                          data-error-empty="Пожалуйста напишите ваше сообщение"
                                          required aria-required="true"
                                          ></textarea>
                                <i class="fa fa-pencil form-control-feedback"></i>
                            </div>

                            <div class="form-group controls">
                                <div id="jform_captcha" class=" required"></div>
                            </div>

                            <div class="form-group form-actions">
                                <input type="submit" value="Отправить" class="btn btn-default">

                                <input type="hidden" name="option" value="com_contact" />
                                <input type="hidden" name="task" value="contact.submit" />
                                <input type="hidden" name="return" value="" />
                                <input type="hidden" name="id" value="1:contacts" />
                                <?php echo JHtml::_('form.token'); ?>
                            </div>

                        </form>
                    </div>
                </div>

                <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">

                    <a rel="nofollow" id="print_map" title="Печать" href="/shownews/16-print-contact?tmpl=component&print=1&layout=default&page="
                       onclick="window.open(this.href,'win2','status=no,toolbar=no,scrollbars=yes,titlebar=no,menubar=no,resizable=yes,width=640,height=480,directories=no,location=no'); return false;">
                        <span class="icon-print"></span>Контактная информация для печати
                    </a>                    
                    
                     <div id="ymap">
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>