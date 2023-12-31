<?php

namespace Bitrix\Sale\Internals\Analytics;

use Bitrix\Main;
use Bitrix\Main\ORM\Fields\ArrayField;
use Bitrix\Main\ORM\Fields\IntegerField;
use Bitrix\Main\ORM\Fields\DatetimeField;
use Bitrix\Main\ORM\Fields\StringField;
use Bitrix\Main\Type\DateTime;

/**
 * Class AnalyticsTable
 *
 * @package Bitrix\Sale\Internals
 * @internal
 *
 * DO NOT WRITE ANYTHING BELOW THIS
 *
 * <<< ORMENTITYANNOTATION
 * @method static EO_Analytics_Query query()
 * @method static EO_Analytics_Result getByPrimary($primary, array $parameters = [])
 * @method static EO_Analytics_Result getById($id)
 * @method static EO_Analytics_Result getList(array $parameters = [])
 * @method static EO_Analytics_Entity getEntity()
 * @method static \Bitrix\Sale\Internals\Analytics\EO_Analytics createObject($setDefaultValues = true)
 * @method static \Bitrix\Sale\Internals\Analytics\EO_Analytics_Collection createCollection()
 * @method static \Bitrix\Sale\Internals\Analytics\EO_Analytics wakeUpObject($row)
 * @method static \Bitrix\Sale\Internals\Analytics\EO_Analytics_Collection wakeUpCollection($rows)
 */
class AnalyticsTable extends Main\Entity\DataManager
{
	/**
	 * @inheritDoc
	 */
	public static function getTableName()
	{
		return 'b_sale_analytics';
	}

	/**
	 * @inheritDoc
	 */
	public static function getMap()
	{
		return [
			(new IntegerField('ID'))
				->configureAutocomplete()
				->configurePrimary(),
			(new StringField('CODE'))
				->configureRequired()
				->configureSize(255),
			(new DatetimeField('CREATED_AT'))
				->configureRequired()
				->configureDefaultValue(static function() {
					return new DateTime();
				}),
			(new ArrayField('PAYLOAD'))
				->configureSerializationPhp()
				->configureUnserializeCallback(function ($value) {
					return unserialize(
						$value,
						['allowed_classes' => false]
					);
				}),
		];
	}

	/**
	 * @param DateTime $dateTo
	 * @return Main\DB\Result
	 */
	public static function deleteByDate(Main\Type\DateTime $dateTo): Main\DB\Result
	{
		$connection = Main\Application::getConnection();
		$helper = $connection->getSqlHelper();

		return $connection->query(sprintf(
			'DELETE FROM %s WHERE CREATED_AT <= %s',
			$helper->quote(AnalyticsTable::getTableName()),
			$helper->convertToDbDateTime($dateTo)
		));
	}

	/**
	 *
	 *
	 * @param string $providerCode
	 * @param DateTime $dateTo
	 * @return Main\DB\Result
	 */
	public static function deleteByCodeAndDate(string $providerCode, Main\Type\DateTime $dateTo): Main\DB\Result
	{
		$connection = Main\Application::getConnection();
		$helper = $connection->getSqlHelper();

		return $connection->query(sprintf(
			'DELETE FROM %s WHERE CODE = %s AND CREATED_AT <= %s',
			$helper->quote(AnalyticsTable::getTableName()),
			$helper->convertToDbString($providerCode),
			$helper->convertToDbDateTime($dateTo)
		));
	}
}
