<?php
/**
 * This file is part of Contao EstateManager.
 *
 * @link      https://www.contao-estatemanager.com/
 * @source    https://github.com/contao-estatemanager/lead-matching-tool
 * @copyright Copyright (c) 2019  Oveleon GbR (https://www.oveleon.de)
 * @license   https://www.contao-estatemanager.com/lizenzbedingungen.html
 */

namespace ContaoEstateManager\LeadMatchingTool;


/**
 * Reads and writes filter
 *
 * @property integer $id
 * @property integer $tstamp
 * @property string  $title
 * @property string  $marketing
 * @property boolean $published
 *
 * @method static LeadMatchingModel|null findById($id, array $opt=array())
 * @method static LeadMatchingModel|null findOneBy($col, $val, $opt=array())
 * @method static LeadMatchingModel|null findOneByTstamp($col, $val, $opt=array())
 * @method static LeadMatchingModel|null findOneByMarketing($col, $val, $opt=array())
 * @method static LeadMatchingModel|null findOneByTitle($col, $val, $opt=array())
 * @method static LeadMatchingModel|null findOneByPublished($col, $val, $opt=array())
 *
 * @method static \Model\Collection|LeadMatchingModel[]|LeadMatchingModel|null findMultipleByIds($val, array $opt=array())
 * @method static \Model\Collection|LeadMatchingModel[]|LeadMatchingModel|null findByTstamp($val, array $opt=array())
 * @method static \Model\Collection|LeadMatchingModel[]|LeadMatchingModel|null findByMarketing($val, array $opt=array())
 * @method static \Model\Collection|LeadMatchingModel[]|LeadMatchingModel|null findByTitle($val, array $opt=array())
 * @method static \Model\Collection|LeadMatchingModel[]|LeadMatchingModel|null findByPublished($val, array $opt=array())
 *
 * @method static integer countById($id, array $opt=array())
 * @method static integer countByTstamp($id, array $opt=array())
 * @method static integer countByMarketing($id, array $opt=array())
 * @method static integer countByTitle($id, array $opt=array())
 * @method static integer countByPublished($id, array $opt=array())
 *
 * @author Daniele Sciannimanica <https://github.com/doishub>
 */

class LeadMatchingModel extends \Model
{

    /**
     * Table name
     * @var string
     */
    protected static $strTable = 'tl_searchcriteria';
}
