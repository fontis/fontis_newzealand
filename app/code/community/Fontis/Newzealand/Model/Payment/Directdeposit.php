<?php
/**
 * Fontis New Zealand Extension
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magentocommerce.com so we can send you a copy immediately.
 *
 * @category   Fontis
 * @package    Fontis_Newzealand
 * @author     Chris Norton
 * @copyright  Copyright (c) 2008 Fontis Pty. Ltd. (http://www.fontis.com.au)
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

/**
 * Direct deposit payment model.
 * This allows customers to be presented with the owner's bank account details
 * so that the customer may deposit money directly.
 */
class Fontis_Newzealand_Model_Payment_Directdeposit extends Mage_Payment_Model_Method_Abstract
{

    protected $_code  = 'directdeposit_nz';
    protected $_formBlockType = 'fontis_newzealand_block_directdeposit_form';
    protected $_infoBlockType = 'fontis_newzealand_block_directdeposit_info';

    /**
     * Assign data to info model instance
     *
     * @param   mixed $data
     * @return  Fontis_Newzealand_Model_Payment_Directdeposit
     */
    public function assignData($data)
    {
        $details = array();
        if ($this->getAccountName())
        {
            $details['account_name'] = $this->getAccountName();
        }
        if ($this->getAccountBank()) 
        {
            $details['account_bank'] = $this->getAccountBank();
        }
        if ($this->getAccountBranch()) 
        {
            $details['account_branch'] = $this->getAccountBranch();
        }
        if ($this->getAccountNumber()) 
        {
            $details['account_number'] = $this->getAccountNumber();
        }
        if ($this->getMessage())
        {
        	$details['message'] = $this->getMessage();
        }
        if (!empty($details)) 
        {
            $this->getInfoInstance()->setAdditionalData(serialize($details));
        }
        return $this;
    }
    
	public function getAccountName()
	{
		return $this->getConfigData('account_name');
	}

	public function getAccountBank()
	{
		return $this->getConfigData('account_bank');
	}

	public function getAccountBranch()
	{
		return $this->getConfigData('account_branch');
	}

	public function getAccountNumber()
	{
		return $this->getConfigData('account_number');
	}
	
	public function getMessage()
	{
		return $this->getConfigData('message');
	}
    
}
