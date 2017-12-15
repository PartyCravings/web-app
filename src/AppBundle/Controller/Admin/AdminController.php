<?php

namespace AppBundle\Controller\Admin;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Account;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AdminController as BaseAdminController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

/**
 * @Route("easyadmin")
 * @ParamConverter(
                    "_country",
                    class="AppBundle:Country",
                    options=
                    {
                        "id" = "_country",
                        "repository_method" = "findByName"
                    }
                )
 *
 */
class AdminController extends BaseAdminController
{
    public function createNewAccountEntity()
    {
        return new Account();
    }

    public function prePersistAccountEntity(Account $account)
    {
        $this->get('fos_user.user_manager')->updateUser($account, false);
    }
}
