<?php
namespace App\Model;

use Slim\Container;

class dgmEffects {

	/**
	 * @var Container
	 */
	protected $container;

	/**
	 * @param Container $container
	 */
	public function __construct(Container $container) {
		$this->container = $container;
		$this->db = $container->get("db");
	}

	/**
	 * @param int $dischargeAttributeID
	 */
	public function getAllByDischargeAttributeID(int $dischargeAttributeID) {
		return $this->db->query("SELECT * FROM dgmEffects WHERE dischargeAttributeID = :dischargeAttributeID", array(":dischargeAttributeID" => $dischargeAttributeID));
	}

	/**
	 * @param string $displayName
	 */
	public function getAllByDisplayName(string $displayName) {
		return $this->db->query("SELECT * FROM dgmEffects WHERE displayName = :displayName", array(":displayName" => $displayName));
	}

	/**
	 * @param int $durationAttributeID
	 */
	public function getAllByDurationAttributeID(int $durationAttributeID) {
		return $this->db->query("SELECT * FROM dgmEffects WHERE durationAttributeID = :durationAttributeID", array(":durationAttributeID" => $durationAttributeID));
	}

	/**
	 * @param int $effectID
	 */
	public function getAllByEffectID(int $effectID) {
		return $this->db->query("SELECT * FROM dgmEffects WHERE effectID = :effectID", array(":effectID" => $effectID));
	}

	/**
	 * @param string $effectName
	 */
	public function getAllByEffectName(string $effectName) {
		return $this->db->query("SELECT * FROM dgmEffects WHERE effectName = :effectName", array(":effectName" => $effectName));
	}

	/**
	 * @param int $falloffAttributeID
	 */
	public function getAllByFalloffAttributeID(int $falloffAttributeID) {
		return $this->db->query("SELECT * FROM dgmEffects WHERE falloffAttributeID = :falloffAttributeID", array(":falloffAttributeID" => $falloffAttributeID));
	}

	/**
	 * @param int $fittingUsageChanceAttributeID
	 */
	public function getAllByFittingUsageChanceAttributeID(int $fittingUsageChanceAttributeID) {
		return $this->db->query("SELECT * FROM dgmEffects WHERE fittingUsageChanceAttributeID = :fittingUsageChanceAttributeID", array(":fittingUsageChanceAttributeID" => $fittingUsageChanceAttributeID));
	}

	/**
	 * @param int $iconID
	 */
	public function getAllByIconID(int $iconID) {
		return $this->db->query("SELECT * FROM dgmEffects WHERE iconID = :iconID", array(":iconID" => $iconID));
	}

	/**
	 * @param int $npcActivationChanceAttributeID
	 */
	public function getAllByNpcActivationChanceAttributeID(int $npcActivationChanceAttributeID) {
		return $this->db->query("SELECT * FROM dgmEffects WHERE npcActivationChanceAttributeID = :npcActivationChanceAttributeID", array(":npcActivationChanceAttributeID" => $npcActivationChanceAttributeID));
	}

	/**
	 * @param int $npcUsageChanceAttributeID
	 */
	public function getAllByNpcUsageChanceAttributeID(int $npcUsageChanceAttributeID) {
		return $this->db->query("SELECT * FROM dgmEffects WHERE npcUsageChanceAttributeID = :npcUsageChanceAttributeID", array(":npcUsageChanceAttributeID" => $npcUsageChanceAttributeID));
	}

	/**
	 * @param int $rangeAttributeID
	 */
	public function getAllByRangeAttributeID(int $rangeAttributeID) {
		return $this->db->query("SELECT * FROM dgmEffects WHERE rangeAttributeID = :rangeAttributeID", array(":rangeAttributeID" => $rangeAttributeID));
	}

	/**
	 * @param string $sfxName
	 */
	public function getAllBySfxName(string $sfxName) {
		return $this->db->query("SELECT * FROM dgmEffects WHERE sfxName = :sfxName", array(":sfxName" => $sfxName));
	}

	/**
	 * @param int $trackingSpeedAttributeID
	 */
	public function getAllByTrackingSpeedAttributeID(int $trackingSpeedAttributeID) {
		return $this->db->query("SELECT * FROM dgmEffects WHERE trackingSpeedAttributeID = :trackingSpeedAttributeID", array(":trackingSpeedAttributeID" => $trackingSpeedAttributeID));
	}

	/**
	 * @param int $dischargeAttributeID
	 */
	public function getDescriptionByDischargeAttributeID(int $dischargeAttributeID) {
		return $this->db->queryField("SELECT description FROM dgmEffects WHERE dischargeAttributeID = :dischargeAttributeID", "description", array(":dischargeAttributeID" => $dischargeAttributeID));
	}

	/**
	 * @param string $displayName
	 */
	public function getDescriptionByDisplayName(string $displayName) {
		return $this->db->queryField("SELECT description FROM dgmEffects WHERE displayName = :displayName", "description", array(":displayName" => $displayName));
	}

	/**
	 * @param int $durationAttributeID
	 */
	public function getDescriptionByDurationAttributeID(int $durationAttributeID) {
		return $this->db->queryField("SELECT description FROM dgmEffects WHERE durationAttributeID = :durationAttributeID", "description", array(":durationAttributeID" => $durationAttributeID));
	}

	/**
	 * @param int $effectID
	 */
	public function getDescriptionByEffectID(int $effectID) {
		return $this->db->queryField("SELECT description FROM dgmEffects WHERE effectID = :effectID", "description", array(":effectID" => $effectID));
	}

	/**
	 * @param string $effectName
	 */
	public function getDescriptionByEffectName(string $effectName) {
		return $this->db->queryField("SELECT description FROM dgmEffects WHERE effectName = :effectName", "description", array(":effectName" => $effectName));
	}

	/**
	 * @param int $falloffAttributeID
	 */
	public function getDescriptionByFalloffAttributeID(int $falloffAttributeID) {
		return $this->db->queryField("SELECT description FROM dgmEffects WHERE falloffAttributeID = :falloffAttributeID", "description", array(":falloffAttributeID" => $falloffAttributeID));
	}

	/**
	 * @param int $fittingUsageChanceAttributeID
	 */
	public function getDescriptionByFittingUsageChanceAttributeID(int $fittingUsageChanceAttributeID) {
		return $this->db->queryField("SELECT description FROM dgmEffects WHERE fittingUsageChanceAttributeID = :fittingUsageChanceAttributeID", "description", array(":fittingUsageChanceAttributeID" => $fittingUsageChanceAttributeID));
	}

	/**
	 * @param int $iconID
	 */
	public function getDescriptionByIconID(int $iconID) {
		return $this->db->queryField("SELECT description FROM dgmEffects WHERE iconID = :iconID", "description", array(":iconID" => $iconID));
	}

	/**
	 * @param int $npcActivationChanceAttributeID
	 */
	public function getDescriptionByNpcActivationChanceAttributeID(int $npcActivationChanceAttributeID) {
		return $this->db->queryField("SELECT description FROM dgmEffects WHERE npcActivationChanceAttributeID = :npcActivationChanceAttributeID", "description", array(":npcActivationChanceAttributeID" => $npcActivationChanceAttributeID));
	}

	/**
	 * @param int $npcUsageChanceAttributeID
	 */
	public function getDescriptionByNpcUsageChanceAttributeID(int $npcUsageChanceAttributeID) {
		return $this->db->queryField("SELECT description FROM dgmEffects WHERE npcUsageChanceAttributeID = :npcUsageChanceAttributeID", "description", array(":npcUsageChanceAttributeID" => $npcUsageChanceAttributeID));
	}

	/**
	 * @param int $rangeAttributeID
	 */
	public function getDescriptionByRangeAttributeID(int $rangeAttributeID) {
		return $this->db->queryField("SELECT description FROM dgmEffects WHERE rangeAttributeID = :rangeAttributeID", "description", array(":rangeAttributeID" => $rangeAttributeID));
	}

	/**
	 * @param string $sfxName
	 */
	public function getDescriptionBySfxName(string $sfxName) {
		return $this->db->queryField("SELECT description FROM dgmEffects WHERE sfxName = :sfxName", "description", array(":sfxName" => $sfxName));
	}

	/**
	 * @param int $trackingSpeedAttributeID
	 */
	public function getDescriptionByTrackingSpeedAttributeID(int $trackingSpeedAttributeID) {
		return $this->db->queryField("SELECT description FROM dgmEffects WHERE trackingSpeedAttributeID = :trackingSpeedAttributeID", "description", array(":trackingSpeedAttributeID" => $trackingSpeedAttributeID));
	}

	/**
	 * @param int $dischargeAttributeID
	 */
	public function getDisallowAutoRepeatByDischargeAttributeID(int $dischargeAttributeID) {
		return $this->db->queryField("SELECT disallowAutoRepeat FROM dgmEffects WHERE dischargeAttributeID = :dischargeAttributeID", "disallowAutoRepeat", array(":dischargeAttributeID" => $dischargeAttributeID));
	}

	/**
	 * @param string $displayName
	 */
	public function getDisallowAutoRepeatByDisplayName(string $displayName) {
		return $this->db->queryField("SELECT disallowAutoRepeat FROM dgmEffects WHERE displayName = :displayName", "disallowAutoRepeat", array(":displayName" => $displayName));
	}

	/**
	 * @param int $durationAttributeID
	 */
	public function getDisallowAutoRepeatByDurationAttributeID(int $durationAttributeID) {
		return $this->db->queryField("SELECT disallowAutoRepeat FROM dgmEffects WHERE durationAttributeID = :durationAttributeID", "disallowAutoRepeat", array(":durationAttributeID" => $durationAttributeID));
	}

	/**
	 * @param int $effectID
	 */
	public function getDisallowAutoRepeatByEffectID(int $effectID) {
		return $this->db->queryField("SELECT disallowAutoRepeat FROM dgmEffects WHERE effectID = :effectID", "disallowAutoRepeat", array(":effectID" => $effectID));
	}

	/**
	 * @param string $effectName
	 */
	public function getDisallowAutoRepeatByEffectName(string $effectName) {
		return $this->db->queryField("SELECT disallowAutoRepeat FROM dgmEffects WHERE effectName = :effectName", "disallowAutoRepeat", array(":effectName" => $effectName));
	}

	/**
	 * @param int $falloffAttributeID
	 */
	public function getDisallowAutoRepeatByFalloffAttributeID(int $falloffAttributeID) {
		return $this->db->queryField("SELECT disallowAutoRepeat FROM dgmEffects WHERE falloffAttributeID = :falloffAttributeID", "disallowAutoRepeat", array(":falloffAttributeID" => $falloffAttributeID));
	}

	/**
	 * @param int $fittingUsageChanceAttributeID
	 */
	public function getDisallowAutoRepeatByFittingUsageChanceAttributeID(int $fittingUsageChanceAttributeID) {
		return $this->db->queryField("SELECT disallowAutoRepeat FROM dgmEffects WHERE fittingUsageChanceAttributeID = :fittingUsageChanceAttributeID", "disallowAutoRepeat", array(":fittingUsageChanceAttributeID" => $fittingUsageChanceAttributeID));
	}

	/**
	 * @param int $iconID
	 */
	public function getDisallowAutoRepeatByIconID(int $iconID) {
		return $this->db->queryField("SELECT disallowAutoRepeat FROM dgmEffects WHERE iconID = :iconID", "disallowAutoRepeat", array(":iconID" => $iconID));
	}

	/**
	 * @param int $npcActivationChanceAttributeID
	 */
	public function getDisallowAutoRepeatByNpcActivationChanceAttributeID(int $npcActivationChanceAttributeID) {
		return $this->db->queryField("SELECT disallowAutoRepeat FROM dgmEffects WHERE npcActivationChanceAttributeID = :npcActivationChanceAttributeID", "disallowAutoRepeat", array(":npcActivationChanceAttributeID" => $npcActivationChanceAttributeID));
	}

	/**
	 * @param int $npcUsageChanceAttributeID
	 */
	public function getDisallowAutoRepeatByNpcUsageChanceAttributeID(int $npcUsageChanceAttributeID) {
		return $this->db->queryField("SELECT disallowAutoRepeat FROM dgmEffects WHERE npcUsageChanceAttributeID = :npcUsageChanceAttributeID", "disallowAutoRepeat", array(":npcUsageChanceAttributeID" => $npcUsageChanceAttributeID));
	}

	/**
	 * @param int $rangeAttributeID
	 */
	public function getDisallowAutoRepeatByRangeAttributeID(int $rangeAttributeID) {
		return $this->db->queryField("SELECT disallowAutoRepeat FROM dgmEffects WHERE rangeAttributeID = :rangeAttributeID", "disallowAutoRepeat", array(":rangeAttributeID" => $rangeAttributeID));
	}

	/**
	 * @param string $sfxName
	 */
	public function getDisallowAutoRepeatBySfxName(string $sfxName) {
		return $this->db->queryField("SELECT disallowAutoRepeat FROM dgmEffects WHERE sfxName = :sfxName", "disallowAutoRepeat", array(":sfxName" => $sfxName));
	}

	/**
	 * @param int $trackingSpeedAttributeID
	 */
	public function getDisallowAutoRepeatByTrackingSpeedAttributeID(int $trackingSpeedAttributeID) {
		return $this->db->queryField("SELECT disallowAutoRepeat FROM dgmEffects WHERE trackingSpeedAttributeID = :trackingSpeedAttributeID", "disallowAutoRepeat", array(":trackingSpeedAttributeID" => $trackingSpeedAttributeID));
	}

	/**
	 * @param string $displayName
	 */
	public function getDischargeAttributeIDByDisplayName(string $displayName) {
		return $this->db->queryField("SELECT dischargeAttributeID FROM dgmEffects WHERE displayName = :displayName", "dischargeAttributeID", array(":displayName" => $displayName));
	}

	/**
	 * @param int $durationAttributeID
	 */
	public function getDischargeAttributeIDByDurationAttributeID(int $durationAttributeID) {
		return $this->db->queryField("SELECT dischargeAttributeID FROM dgmEffects WHERE durationAttributeID = :durationAttributeID", "dischargeAttributeID", array(":durationAttributeID" => $durationAttributeID));
	}

	/**
	 * @param int $effectID
	 */
	public function getDischargeAttributeIDByEffectID(int $effectID) {
		return $this->db->queryField("SELECT dischargeAttributeID FROM dgmEffects WHERE effectID = :effectID", "dischargeAttributeID", array(":effectID" => $effectID));
	}

	/**
	 * @param string $effectName
	 */
	public function getDischargeAttributeIDByEffectName(string $effectName) {
		return $this->db->queryField("SELECT dischargeAttributeID FROM dgmEffects WHERE effectName = :effectName", "dischargeAttributeID", array(":effectName" => $effectName));
	}

	/**
	 * @param int $falloffAttributeID
	 */
	public function getDischargeAttributeIDByFalloffAttributeID(int $falloffAttributeID) {
		return $this->db->queryField("SELECT dischargeAttributeID FROM dgmEffects WHERE falloffAttributeID = :falloffAttributeID", "dischargeAttributeID", array(":falloffAttributeID" => $falloffAttributeID));
	}

	/**
	 * @param int $fittingUsageChanceAttributeID
	 */
	public function getDischargeAttributeIDByFittingUsageChanceAttributeID(int $fittingUsageChanceAttributeID) {
		return $this->db->queryField("SELECT dischargeAttributeID FROM dgmEffects WHERE fittingUsageChanceAttributeID = :fittingUsageChanceAttributeID", "dischargeAttributeID", array(":fittingUsageChanceAttributeID" => $fittingUsageChanceAttributeID));
	}

	/**
	 * @param int $iconID
	 */
	public function getDischargeAttributeIDByIconID(int $iconID) {
		return $this->db->queryField("SELECT dischargeAttributeID FROM dgmEffects WHERE iconID = :iconID", "dischargeAttributeID", array(":iconID" => $iconID));
	}

	/**
	 * @param int $npcActivationChanceAttributeID
	 */
	public function getDischargeAttributeIDByNpcActivationChanceAttributeID(int $npcActivationChanceAttributeID) {
		return $this->db->queryField("SELECT dischargeAttributeID FROM dgmEffects WHERE npcActivationChanceAttributeID = :npcActivationChanceAttributeID", "dischargeAttributeID", array(":npcActivationChanceAttributeID" => $npcActivationChanceAttributeID));
	}

	/**
	 * @param int $npcUsageChanceAttributeID
	 */
	public function getDischargeAttributeIDByNpcUsageChanceAttributeID(int $npcUsageChanceAttributeID) {
		return $this->db->queryField("SELECT dischargeAttributeID FROM dgmEffects WHERE npcUsageChanceAttributeID = :npcUsageChanceAttributeID", "dischargeAttributeID", array(":npcUsageChanceAttributeID" => $npcUsageChanceAttributeID));
	}

	/**
	 * @param int $rangeAttributeID
	 */
	public function getDischargeAttributeIDByRangeAttributeID(int $rangeAttributeID) {
		return $this->db->queryField("SELECT dischargeAttributeID FROM dgmEffects WHERE rangeAttributeID = :rangeAttributeID", "dischargeAttributeID", array(":rangeAttributeID" => $rangeAttributeID));
	}

	/**
	 * @param string $sfxName
	 */
	public function getDischargeAttributeIDBySfxName(string $sfxName) {
		return $this->db->queryField("SELECT dischargeAttributeID FROM dgmEffects WHERE sfxName = :sfxName", "dischargeAttributeID", array(":sfxName" => $sfxName));
	}

	/**
	 * @param int $trackingSpeedAttributeID
	 */
	public function getDischargeAttributeIDByTrackingSpeedAttributeID(int $trackingSpeedAttributeID) {
		return $this->db->queryField("SELECT dischargeAttributeID FROM dgmEffects WHERE trackingSpeedAttributeID = :trackingSpeedAttributeID", "dischargeAttributeID", array(":trackingSpeedAttributeID" => $trackingSpeedAttributeID));
	}

	/**
	 * @param int $dischargeAttributeID
	 */
	public function getDisplayNameByDischargeAttributeID(int $dischargeAttributeID) {
		return $this->db->queryField("SELECT displayName FROM dgmEffects WHERE dischargeAttributeID = :dischargeAttributeID", "displayName", array(":dischargeAttributeID" => $dischargeAttributeID));
	}

	/**
	 * @param int $durationAttributeID
	 */
	public function getDisplayNameByDurationAttributeID(int $durationAttributeID) {
		return $this->db->queryField("SELECT displayName FROM dgmEffects WHERE durationAttributeID = :durationAttributeID", "displayName", array(":durationAttributeID" => $durationAttributeID));
	}

	/**
	 * @param int $effectID
	 */
	public function getDisplayNameByEffectID(int $effectID) {
		return $this->db->queryField("SELECT displayName FROM dgmEffects WHERE effectID = :effectID", "displayName", array(":effectID" => $effectID));
	}

	/**
	 * @param string $effectName
	 */
	public function getDisplayNameByEffectName(string $effectName) {
		return $this->db->queryField("SELECT displayName FROM dgmEffects WHERE effectName = :effectName", "displayName", array(":effectName" => $effectName));
	}

	/**
	 * @param int $falloffAttributeID
	 */
	public function getDisplayNameByFalloffAttributeID(int $falloffAttributeID) {
		return $this->db->queryField("SELECT displayName FROM dgmEffects WHERE falloffAttributeID = :falloffAttributeID", "displayName", array(":falloffAttributeID" => $falloffAttributeID));
	}

	/**
	 * @param int $fittingUsageChanceAttributeID
	 */
	public function getDisplayNameByFittingUsageChanceAttributeID(int $fittingUsageChanceAttributeID) {
		return $this->db->queryField("SELECT displayName FROM dgmEffects WHERE fittingUsageChanceAttributeID = :fittingUsageChanceAttributeID", "displayName", array(":fittingUsageChanceAttributeID" => $fittingUsageChanceAttributeID));
	}

	/**
	 * @param int $iconID
	 */
	public function getDisplayNameByIconID(int $iconID) {
		return $this->db->queryField("SELECT displayName FROM dgmEffects WHERE iconID = :iconID", "displayName", array(":iconID" => $iconID));
	}

	/**
	 * @param int $npcActivationChanceAttributeID
	 */
	public function getDisplayNameByNpcActivationChanceAttributeID(int $npcActivationChanceAttributeID) {
		return $this->db->queryField("SELECT displayName FROM dgmEffects WHERE npcActivationChanceAttributeID = :npcActivationChanceAttributeID", "displayName", array(":npcActivationChanceAttributeID" => $npcActivationChanceAttributeID));
	}

	/**
	 * @param int $npcUsageChanceAttributeID
	 */
	public function getDisplayNameByNpcUsageChanceAttributeID(int $npcUsageChanceAttributeID) {
		return $this->db->queryField("SELECT displayName FROM dgmEffects WHERE npcUsageChanceAttributeID = :npcUsageChanceAttributeID", "displayName", array(":npcUsageChanceAttributeID" => $npcUsageChanceAttributeID));
	}

	/**
	 * @param int $rangeAttributeID
	 */
	public function getDisplayNameByRangeAttributeID(int $rangeAttributeID) {
		return $this->db->queryField("SELECT displayName FROM dgmEffects WHERE rangeAttributeID = :rangeAttributeID", "displayName", array(":rangeAttributeID" => $rangeAttributeID));
	}

	/**
	 * @param string $sfxName
	 */
	public function getDisplayNameBySfxName(string $sfxName) {
		return $this->db->queryField("SELECT displayName FROM dgmEffects WHERE sfxName = :sfxName", "displayName", array(":sfxName" => $sfxName));
	}

	/**
	 * @param int $trackingSpeedAttributeID
	 */
	public function getDisplayNameByTrackingSpeedAttributeID(int $trackingSpeedAttributeID) {
		return $this->db->queryField("SELECT displayName FROM dgmEffects WHERE trackingSpeedAttributeID = :trackingSpeedAttributeID", "displayName", array(":trackingSpeedAttributeID" => $trackingSpeedAttributeID));
	}

	/**
	 * @param int $dischargeAttributeID
	 */
	public function getDistributionByDischargeAttributeID(int $dischargeAttributeID) {
		return $this->db->queryField("SELECT distribution FROM dgmEffects WHERE dischargeAttributeID = :dischargeAttributeID", "distribution", array(":dischargeAttributeID" => $dischargeAttributeID));
	}

	/**
	 * @param string $displayName
	 */
	public function getDistributionByDisplayName(string $displayName) {
		return $this->db->queryField("SELECT distribution FROM dgmEffects WHERE displayName = :displayName", "distribution", array(":displayName" => $displayName));
	}

	/**
	 * @param int $durationAttributeID
	 */
	public function getDistributionByDurationAttributeID(int $durationAttributeID) {
		return $this->db->queryField("SELECT distribution FROM dgmEffects WHERE durationAttributeID = :durationAttributeID", "distribution", array(":durationAttributeID" => $durationAttributeID));
	}

	/**
	 * @param int $effectID
	 */
	public function getDistributionByEffectID(int $effectID) {
		return $this->db->queryField("SELECT distribution FROM dgmEffects WHERE effectID = :effectID", "distribution", array(":effectID" => $effectID));
	}

	/**
	 * @param string $effectName
	 */
	public function getDistributionByEffectName(string $effectName) {
		return $this->db->queryField("SELECT distribution FROM dgmEffects WHERE effectName = :effectName", "distribution", array(":effectName" => $effectName));
	}

	/**
	 * @param int $falloffAttributeID
	 */
	public function getDistributionByFalloffAttributeID(int $falloffAttributeID) {
		return $this->db->queryField("SELECT distribution FROM dgmEffects WHERE falloffAttributeID = :falloffAttributeID", "distribution", array(":falloffAttributeID" => $falloffAttributeID));
	}

	/**
	 * @param int $fittingUsageChanceAttributeID
	 */
	public function getDistributionByFittingUsageChanceAttributeID(int $fittingUsageChanceAttributeID) {
		return $this->db->queryField("SELECT distribution FROM dgmEffects WHERE fittingUsageChanceAttributeID = :fittingUsageChanceAttributeID", "distribution", array(":fittingUsageChanceAttributeID" => $fittingUsageChanceAttributeID));
	}

	/**
	 * @param int $iconID
	 */
	public function getDistributionByIconID(int $iconID) {
		return $this->db->queryField("SELECT distribution FROM dgmEffects WHERE iconID = :iconID", "distribution", array(":iconID" => $iconID));
	}

	/**
	 * @param int $npcActivationChanceAttributeID
	 */
	public function getDistributionByNpcActivationChanceAttributeID(int $npcActivationChanceAttributeID) {
		return $this->db->queryField("SELECT distribution FROM dgmEffects WHERE npcActivationChanceAttributeID = :npcActivationChanceAttributeID", "distribution", array(":npcActivationChanceAttributeID" => $npcActivationChanceAttributeID));
	}

	/**
	 * @param int $npcUsageChanceAttributeID
	 */
	public function getDistributionByNpcUsageChanceAttributeID(int $npcUsageChanceAttributeID) {
		return $this->db->queryField("SELECT distribution FROM dgmEffects WHERE npcUsageChanceAttributeID = :npcUsageChanceAttributeID", "distribution", array(":npcUsageChanceAttributeID" => $npcUsageChanceAttributeID));
	}

	/**
	 * @param int $rangeAttributeID
	 */
	public function getDistributionByRangeAttributeID(int $rangeAttributeID) {
		return $this->db->queryField("SELECT distribution FROM dgmEffects WHERE rangeAttributeID = :rangeAttributeID", "distribution", array(":rangeAttributeID" => $rangeAttributeID));
	}

	/**
	 * @param string $sfxName
	 */
	public function getDistributionBySfxName(string $sfxName) {
		return $this->db->queryField("SELECT distribution FROM dgmEffects WHERE sfxName = :sfxName", "distribution", array(":sfxName" => $sfxName));
	}

	/**
	 * @param int $trackingSpeedAttributeID
	 */
	public function getDistributionByTrackingSpeedAttributeID(int $trackingSpeedAttributeID) {
		return $this->db->queryField("SELECT distribution FROM dgmEffects WHERE trackingSpeedAttributeID = :trackingSpeedAttributeID", "distribution", array(":trackingSpeedAttributeID" => $trackingSpeedAttributeID));
	}

	/**
	 * @param int $dischargeAttributeID
	 */
	public function getDurationAttributeIDByDischargeAttributeID(int $dischargeAttributeID) {
		return $this->db->queryField("SELECT durationAttributeID FROM dgmEffects WHERE dischargeAttributeID = :dischargeAttributeID", "durationAttributeID", array(":dischargeAttributeID" => $dischargeAttributeID));
	}

	/**
	 * @param string $displayName
	 */
	public function getDurationAttributeIDByDisplayName(string $displayName) {
		return $this->db->queryField("SELECT durationAttributeID FROM dgmEffects WHERE displayName = :displayName", "durationAttributeID", array(":displayName" => $displayName));
	}

	/**
	 * @param int $effectID
	 */
	public function getDurationAttributeIDByEffectID(int $effectID) {
		return $this->db->queryField("SELECT durationAttributeID FROM dgmEffects WHERE effectID = :effectID", "durationAttributeID", array(":effectID" => $effectID));
	}

	/**
	 * @param string $effectName
	 */
	public function getDurationAttributeIDByEffectName(string $effectName) {
		return $this->db->queryField("SELECT durationAttributeID FROM dgmEffects WHERE effectName = :effectName", "durationAttributeID", array(":effectName" => $effectName));
	}

	/**
	 * @param int $falloffAttributeID
	 */
	public function getDurationAttributeIDByFalloffAttributeID(int $falloffAttributeID) {
		return $this->db->queryField("SELECT durationAttributeID FROM dgmEffects WHERE falloffAttributeID = :falloffAttributeID", "durationAttributeID", array(":falloffAttributeID" => $falloffAttributeID));
	}

	/**
	 * @param int $fittingUsageChanceAttributeID
	 */
	public function getDurationAttributeIDByFittingUsageChanceAttributeID(int $fittingUsageChanceAttributeID) {
		return $this->db->queryField("SELECT durationAttributeID FROM dgmEffects WHERE fittingUsageChanceAttributeID = :fittingUsageChanceAttributeID", "durationAttributeID", array(":fittingUsageChanceAttributeID" => $fittingUsageChanceAttributeID));
	}

	/**
	 * @param int $iconID
	 */
	public function getDurationAttributeIDByIconID(int $iconID) {
		return $this->db->queryField("SELECT durationAttributeID FROM dgmEffects WHERE iconID = :iconID", "durationAttributeID", array(":iconID" => $iconID));
	}

	/**
	 * @param int $npcActivationChanceAttributeID
	 */
	public function getDurationAttributeIDByNpcActivationChanceAttributeID(int $npcActivationChanceAttributeID) {
		return $this->db->queryField("SELECT durationAttributeID FROM dgmEffects WHERE npcActivationChanceAttributeID = :npcActivationChanceAttributeID", "durationAttributeID", array(":npcActivationChanceAttributeID" => $npcActivationChanceAttributeID));
	}

	/**
	 * @param int $npcUsageChanceAttributeID
	 */
	public function getDurationAttributeIDByNpcUsageChanceAttributeID(int $npcUsageChanceAttributeID) {
		return $this->db->queryField("SELECT durationAttributeID FROM dgmEffects WHERE npcUsageChanceAttributeID = :npcUsageChanceAttributeID", "durationAttributeID", array(":npcUsageChanceAttributeID" => $npcUsageChanceAttributeID));
	}

	/**
	 * @param int $rangeAttributeID
	 */
	public function getDurationAttributeIDByRangeAttributeID(int $rangeAttributeID) {
		return $this->db->queryField("SELECT durationAttributeID FROM dgmEffects WHERE rangeAttributeID = :rangeAttributeID", "durationAttributeID", array(":rangeAttributeID" => $rangeAttributeID));
	}

	/**
	 * @param string $sfxName
	 */
	public function getDurationAttributeIDBySfxName(string $sfxName) {
		return $this->db->queryField("SELECT durationAttributeID FROM dgmEffects WHERE sfxName = :sfxName", "durationAttributeID", array(":sfxName" => $sfxName));
	}

	/**
	 * @param int $trackingSpeedAttributeID
	 */
	public function getDurationAttributeIDByTrackingSpeedAttributeID(int $trackingSpeedAttributeID) {
		return $this->db->queryField("SELECT durationAttributeID FROM dgmEffects WHERE trackingSpeedAttributeID = :trackingSpeedAttributeID", "durationAttributeID", array(":trackingSpeedAttributeID" => $trackingSpeedAttributeID));
	}

	/**
	 * @param int $dischargeAttributeID
	 */
	public function getEffectCategoryByDischargeAttributeID(int $dischargeAttributeID) {
		return $this->db->queryField("SELECT effectCategory FROM dgmEffects WHERE dischargeAttributeID = :dischargeAttributeID", "effectCategory", array(":dischargeAttributeID" => $dischargeAttributeID));
	}

	/**
	 * @param string $displayName
	 */
	public function getEffectCategoryByDisplayName(string $displayName) {
		return $this->db->queryField("SELECT effectCategory FROM dgmEffects WHERE displayName = :displayName", "effectCategory", array(":displayName" => $displayName));
	}

	/**
	 * @param int $durationAttributeID
	 */
	public function getEffectCategoryByDurationAttributeID(int $durationAttributeID) {
		return $this->db->queryField("SELECT effectCategory FROM dgmEffects WHERE durationAttributeID = :durationAttributeID", "effectCategory", array(":durationAttributeID" => $durationAttributeID));
	}

	/**
	 * @param int $effectID
	 */
	public function getEffectCategoryByEffectID(int $effectID) {
		return $this->db->queryField("SELECT effectCategory FROM dgmEffects WHERE effectID = :effectID", "effectCategory", array(":effectID" => $effectID));
	}

	/**
	 * @param string $effectName
	 */
	public function getEffectCategoryByEffectName(string $effectName) {
		return $this->db->queryField("SELECT effectCategory FROM dgmEffects WHERE effectName = :effectName", "effectCategory", array(":effectName" => $effectName));
	}

	/**
	 * @param int $falloffAttributeID
	 */
	public function getEffectCategoryByFalloffAttributeID(int $falloffAttributeID) {
		return $this->db->queryField("SELECT effectCategory FROM dgmEffects WHERE falloffAttributeID = :falloffAttributeID", "effectCategory", array(":falloffAttributeID" => $falloffAttributeID));
	}

	/**
	 * @param int $fittingUsageChanceAttributeID
	 */
	public function getEffectCategoryByFittingUsageChanceAttributeID(int $fittingUsageChanceAttributeID) {
		return $this->db->queryField("SELECT effectCategory FROM dgmEffects WHERE fittingUsageChanceAttributeID = :fittingUsageChanceAttributeID", "effectCategory", array(":fittingUsageChanceAttributeID" => $fittingUsageChanceAttributeID));
	}

	/**
	 * @param int $iconID
	 */
	public function getEffectCategoryByIconID(int $iconID) {
		return $this->db->queryField("SELECT effectCategory FROM dgmEffects WHERE iconID = :iconID", "effectCategory", array(":iconID" => $iconID));
	}

	/**
	 * @param int $npcActivationChanceAttributeID
	 */
	public function getEffectCategoryByNpcActivationChanceAttributeID(int $npcActivationChanceAttributeID) {
		return $this->db->queryField("SELECT effectCategory FROM dgmEffects WHERE npcActivationChanceAttributeID = :npcActivationChanceAttributeID", "effectCategory", array(":npcActivationChanceAttributeID" => $npcActivationChanceAttributeID));
	}

	/**
	 * @param int $npcUsageChanceAttributeID
	 */
	public function getEffectCategoryByNpcUsageChanceAttributeID(int $npcUsageChanceAttributeID) {
		return $this->db->queryField("SELECT effectCategory FROM dgmEffects WHERE npcUsageChanceAttributeID = :npcUsageChanceAttributeID", "effectCategory", array(":npcUsageChanceAttributeID" => $npcUsageChanceAttributeID));
	}

	/**
	 * @param int $rangeAttributeID
	 */
	public function getEffectCategoryByRangeAttributeID(int $rangeAttributeID) {
		return $this->db->queryField("SELECT effectCategory FROM dgmEffects WHERE rangeAttributeID = :rangeAttributeID", "effectCategory", array(":rangeAttributeID" => $rangeAttributeID));
	}

	/**
	 * @param string $sfxName
	 */
	public function getEffectCategoryBySfxName(string $sfxName) {
		return $this->db->queryField("SELECT effectCategory FROM dgmEffects WHERE sfxName = :sfxName", "effectCategory", array(":sfxName" => $sfxName));
	}

	/**
	 * @param int $trackingSpeedAttributeID
	 */
	public function getEffectCategoryByTrackingSpeedAttributeID(int $trackingSpeedAttributeID) {
		return $this->db->queryField("SELECT effectCategory FROM dgmEffects WHERE trackingSpeedAttributeID = :trackingSpeedAttributeID", "effectCategory", array(":trackingSpeedAttributeID" => $trackingSpeedAttributeID));
	}

	/**
	 * @param int $dischargeAttributeID
	 */
	public function getEffectIDByDischargeAttributeID(int $dischargeAttributeID) {
		return $this->db->queryField("SELECT effectID FROM dgmEffects WHERE dischargeAttributeID = :dischargeAttributeID", "effectID", array(":dischargeAttributeID" => $dischargeAttributeID));
	}

	/**
	 * @param string $displayName
	 */
	public function getEffectIDByDisplayName(string $displayName) {
		return $this->db->queryField("SELECT effectID FROM dgmEffects WHERE displayName = :displayName", "effectID", array(":displayName" => $displayName));
	}

	/**
	 * @param int $durationAttributeID
	 */
	public function getEffectIDByDurationAttributeID(int $durationAttributeID) {
		return $this->db->queryField("SELECT effectID FROM dgmEffects WHERE durationAttributeID = :durationAttributeID", "effectID", array(":durationAttributeID" => $durationAttributeID));
	}

	/**
	 * @param string $effectName
	 */
	public function getEffectIDByEffectName(string $effectName) {
		return $this->db->queryField("SELECT effectID FROM dgmEffects WHERE effectName = :effectName", "effectID", array(":effectName" => $effectName));
	}

	/**
	 * @param int $falloffAttributeID
	 */
	public function getEffectIDByFalloffAttributeID(int $falloffAttributeID) {
		return $this->db->queryField("SELECT effectID FROM dgmEffects WHERE falloffAttributeID = :falloffAttributeID", "effectID", array(":falloffAttributeID" => $falloffAttributeID));
	}

	/**
	 * @param int $fittingUsageChanceAttributeID
	 */
	public function getEffectIDByFittingUsageChanceAttributeID(int $fittingUsageChanceAttributeID) {
		return $this->db->queryField("SELECT effectID FROM dgmEffects WHERE fittingUsageChanceAttributeID = :fittingUsageChanceAttributeID", "effectID", array(":fittingUsageChanceAttributeID" => $fittingUsageChanceAttributeID));
	}

	/**
	 * @param int $iconID
	 */
	public function getEffectIDByIconID(int $iconID) {
		return $this->db->queryField("SELECT effectID FROM dgmEffects WHERE iconID = :iconID", "effectID", array(":iconID" => $iconID));
	}

	/**
	 * @param int $npcActivationChanceAttributeID
	 */
	public function getEffectIDByNpcActivationChanceAttributeID(int $npcActivationChanceAttributeID) {
		return $this->db->queryField("SELECT effectID FROM dgmEffects WHERE npcActivationChanceAttributeID = :npcActivationChanceAttributeID", "effectID", array(":npcActivationChanceAttributeID" => $npcActivationChanceAttributeID));
	}

	/**
	 * @param int $npcUsageChanceAttributeID
	 */
	public function getEffectIDByNpcUsageChanceAttributeID(int $npcUsageChanceAttributeID) {
		return $this->db->queryField("SELECT effectID FROM dgmEffects WHERE npcUsageChanceAttributeID = :npcUsageChanceAttributeID", "effectID", array(":npcUsageChanceAttributeID" => $npcUsageChanceAttributeID));
	}

	/**
	 * @param int $rangeAttributeID
	 */
	public function getEffectIDByRangeAttributeID(int $rangeAttributeID) {
		return $this->db->queryField("SELECT effectID FROM dgmEffects WHERE rangeAttributeID = :rangeAttributeID", "effectID", array(":rangeAttributeID" => $rangeAttributeID));
	}

	/**
	 * @param string $sfxName
	 */
	public function getEffectIDBySfxName(string $sfxName) {
		return $this->db->queryField("SELECT effectID FROM dgmEffects WHERE sfxName = :sfxName", "effectID", array(":sfxName" => $sfxName));
	}

	/**
	 * @param int $trackingSpeedAttributeID
	 */
	public function getEffectIDByTrackingSpeedAttributeID(int $trackingSpeedAttributeID) {
		return $this->db->queryField("SELECT effectID FROM dgmEffects WHERE trackingSpeedAttributeID = :trackingSpeedAttributeID", "effectID", array(":trackingSpeedAttributeID" => $trackingSpeedAttributeID));
	}

	/**
	 * @param int $dischargeAttributeID
	 */
	public function getEffectNameByDischargeAttributeID(int $dischargeAttributeID) {
		return $this->db->queryField("SELECT effectName FROM dgmEffects WHERE dischargeAttributeID = :dischargeAttributeID", "effectName", array(":dischargeAttributeID" => $dischargeAttributeID));
	}

	/**
	 * @param string $displayName
	 */
	public function getEffectNameByDisplayName(string $displayName) {
		return $this->db->queryField("SELECT effectName FROM dgmEffects WHERE displayName = :displayName", "effectName", array(":displayName" => $displayName));
	}

	/**
	 * @param int $durationAttributeID
	 */
	public function getEffectNameByDurationAttributeID(int $durationAttributeID) {
		return $this->db->queryField("SELECT effectName FROM dgmEffects WHERE durationAttributeID = :durationAttributeID", "effectName", array(":durationAttributeID" => $durationAttributeID));
	}

	/**
	 * @param int $effectID
	 */
	public function getEffectNameByEffectID(int $effectID) {
		return $this->db->queryField("SELECT effectName FROM dgmEffects WHERE effectID = :effectID", "effectName", array(":effectID" => $effectID));
	}

	/**
	 * @param int $falloffAttributeID
	 */
	public function getEffectNameByFalloffAttributeID(int $falloffAttributeID) {
		return $this->db->queryField("SELECT effectName FROM dgmEffects WHERE falloffAttributeID = :falloffAttributeID", "effectName", array(":falloffAttributeID" => $falloffAttributeID));
	}

	/**
	 * @param int $fittingUsageChanceAttributeID
	 */
	public function getEffectNameByFittingUsageChanceAttributeID(int $fittingUsageChanceAttributeID) {
		return $this->db->queryField("SELECT effectName FROM dgmEffects WHERE fittingUsageChanceAttributeID = :fittingUsageChanceAttributeID", "effectName", array(":fittingUsageChanceAttributeID" => $fittingUsageChanceAttributeID));
	}

	/**
	 * @param int $iconID
	 */
	public function getEffectNameByIconID(int $iconID) {
		return $this->db->queryField("SELECT effectName FROM dgmEffects WHERE iconID = :iconID", "effectName", array(":iconID" => $iconID));
	}

	/**
	 * @param int $npcActivationChanceAttributeID
	 */
	public function getEffectNameByNpcActivationChanceAttributeID(int $npcActivationChanceAttributeID) {
		return $this->db->queryField("SELECT effectName FROM dgmEffects WHERE npcActivationChanceAttributeID = :npcActivationChanceAttributeID", "effectName", array(":npcActivationChanceAttributeID" => $npcActivationChanceAttributeID));
	}

	/**
	 * @param int $npcUsageChanceAttributeID
	 */
	public function getEffectNameByNpcUsageChanceAttributeID(int $npcUsageChanceAttributeID) {
		return $this->db->queryField("SELECT effectName FROM dgmEffects WHERE npcUsageChanceAttributeID = :npcUsageChanceAttributeID", "effectName", array(":npcUsageChanceAttributeID" => $npcUsageChanceAttributeID));
	}

	/**
	 * @param int $rangeAttributeID
	 */
	public function getEffectNameByRangeAttributeID(int $rangeAttributeID) {
		return $this->db->queryField("SELECT effectName FROM dgmEffects WHERE rangeAttributeID = :rangeAttributeID", "effectName", array(":rangeAttributeID" => $rangeAttributeID));
	}

	/**
	 * @param string $sfxName
	 */
	public function getEffectNameBySfxName(string $sfxName) {
		return $this->db->queryField("SELECT effectName FROM dgmEffects WHERE sfxName = :sfxName", "effectName", array(":sfxName" => $sfxName));
	}

	/**
	 * @param int $trackingSpeedAttributeID
	 */
	public function getEffectNameByTrackingSpeedAttributeID(int $trackingSpeedAttributeID) {
		return $this->db->queryField("SELECT effectName FROM dgmEffects WHERE trackingSpeedAttributeID = :trackingSpeedAttributeID", "effectName", array(":trackingSpeedAttributeID" => $trackingSpeedAttributeID));
	}

	/**
	 * @param int $dischargeAttributeID
	 */
	public function getElectronicChanceByDischargeAttributeID(int $dischargeAttributeID) {
		return $this->db->queryField("SELECT electronicChance FROM dgmEffects WHERE dischargeAttributeID = :dischargeAttributeID", "electronicChance", array(":dischargeAttributeID" => $dischargeAttributeID));
	}

	/**
	 * @param string $displayName
	 */
	public function getElectronicChanceByDisplayName(string $displayName) {
		return $this->db->queryField("SELECT electronicChance FROM dgmEffects WHERE displayName = :displayName", "electronicChance", array(":displayName" => $displayName));
	}

	/**
	 * @param int $durationAttributeID
	 */
	public function getElectronicChanceByDurationAttributeID(int $durationAttributeID) {
		return $this->db->queryField("SELECT electronicChance FROM dgmEffects WHERE durationAttributeID = :durationAttributeID", "electronicChance", array(":durationAttributeID" => $durationAttributeID));
	}

	/**
	 * @param int $effectID
	 */
	public function getElectronicChanceByEffectID(int $effectID) {
		return $this->db->queryField("SELECT electronicChance FROM dgmEffects WHERE effectID = :effectID", "electronicChance", array(":effectID" => $effectID));
	}

	/**
	 * @param string $effectName
	 */
	public function getElectronicChanceByEffectName(string $effectName) {
		return $this->db->queryField("SELECT electronicChance FROM dgmEffects WHERE effectName = :effectName", "electronicChance", array(":effectName" => $effectName));
	}

	/**
	 * @param int $falloffAttributeID
	 */
	public function getElectronicChanceByFalloffAttributeID(int $falloffAttributeID) {
		return $this->db->queryField("SELECT electronicChance FROM dgmEffects WHERE falloffAttributeID = :falloffAttributeID", "electronicChance", array(":falloffAttributeID" => $falloffAttributeID));
	}

	/**
	 * @param int $fittingUsageChanceAttributeID
	 */
	public function getElectronicChanceByFittingUsageChanceAttributeID(int $fittingUsageChanceAttributeID) {
		return $this->db->queryField("SELECT electronicChance FROM dgmEffects WHERE fittingUsageChanceAttributeID = :fittingUsageChanceAttributeID", "electronicChance", array(":fittingUsageChanceAttributeID" => $fittingUsageChanceAttributeID));
	}

	/**
	 * @param int $iconID
	 */
	public function getElectronicChanceByIconID(int $iconID) {
		return $this->db->queryField("SELECT electronicChance FROM dgmEffects WHERE iconID = :iconID", "electronicChance", array(":iconID" => $iconID));
	}

	/**
	 * @param int $npcActivationChanceAttributeID
	 */
	public function getElectronicChanceByNpcActivationChanceAttributeID(int $npcActivationChanceAttributeID) {
		return $this->db->queryField("SELECT electronicChance FROM dgmEffects WHERE npcActivationChanceAttributeID = :npcActivationChanceAttributeID", "electronicChance", array(":npcActivationChanceAttributeID" => $npcActivationChanceAttributeID));
	}

	/**
	 * @param int $npcUsageChanceAttributeID
	 */
	public function getElectronicChanceByNpcUsageChanceAttributeID(int $npcUsageChanceAttributeID) {
		return $this->db->queryField("SELECT electronicChance FROM dgmEffects WHERE npcUsageChanceAttributeID = :npcUsageChanceAttributeID", "electronicChance", array(":npcUsageChanceAttributeID" => $npcUsageChanceAttributeID));
	}

	/**
	 * @param int $rangeAttributeID
	 */
	public function getElectronicChanceByRangeAttributeID(int $rangeAttributeID) {
		return $this->db->queryField("SELECT electronicChance FROM dgmEffects WHERE rangeAttributeID = :rangeAttributeID", "electronicChance", array(":rangeAttributeID" => $rangeAttributeID));
	}

	/**
	 * @param string $sfxName
	 */
	public function getElectronicChanceBySfxName(string $sfxName) {
		return $this->db->queryField("SELECT electronicChance FROM dgmEffects WHERE sfxName = :sfxName", "electronicChance", array(":sfxName" => $sfxName));
	}

	/**
	 * @param int $trackingSpeedAttributeID
	 */
	public function getElectronicChanceByTrackingSpeedAttributeID(int $trackingSpeedAttributeID) {
		return $this->db->queryField("SELECT electronicChance FROM dgmEffects WHERE trackingSpeedAttributeID = :trackingSpeedAttributeID", "electronicChance", array(":trackingSpeedAttributeID" => $trackingSpeedAttributeID));
	}

	/**
	 * @param int $dischargeAttributeID
	 */
	public function getFalloffAttributeIDByDischargeAttributeID(int $dischargeAttributeID) {
		return $this->db->queryField("SELECT falloffAttributeID FROM dgmEffects WHERE dischargeAttributeID = :dischargeAttributeID", "falloffAttributeID", array(":dischargeAttributeID" => $dischargeAttributeID));
	}

	/**
	 * @param string $displayName
	 */
	public function getFalloffAttributeIDByDisplayName(string $displayName) {
		return $this->db->queryField("SELECT falloffAttributeID FROM dgmEffects WHERE displayName = :displayName", "falloffAttributeID", array(":displayName" => $displayName));
	}

	/**
	 * @param int $durationAttributeID
	 */
	public function getFalloffAttributeIDByDurationAttributeID(int $durationAttributeID) {
		return $this->db->queryField("SELECT falloffAttributeID FROM dgmEffects WHERE durationAttributeID = :durationAttributeID", "falloffAttributeID", array(":durationAttributeID" => $durationAttributeID));
	}

	/**
	 * @param int $effectID
	 */
	public function getFalloffAttributeIDByEffectID(int $effectID) {
		return $this->db->queryField("SELECT falloffAttributeID FROM dgmEffects WHERE effectID = :effectID", "falloffAttributeID", array(":effectID" => $effectID));
	}

	/**
	 * @param string $effectName
	 */
	public function getFalloffAttributeIDByEffectName(string $effectName) {
		return $this->db->queryField("SELECT falloffAttributeID FROM dgmEffects WHERE effectName = :effectName", "falloffAttributeID", array(":effectName" => $effectName));
	}

	/**
	 * @param int $fittingUsageChanceAttributeID
	 */
	public function getFalloffAttributeIDByFittingUsageChanceAttributeID(int $fittingUsageChanceAttributeID) {
		return $this->db->queryField("SELECT falloffAttributeID FROM dgmEffects WHERE fittingUsageChanceAttributeID = :fittingUsageChanceAttributeID", "falloffAttributeID", array(":fittingUsageChanceAttributeID" => $fittingUsageChanceAttributeID));
	}

	/**
	 * @param int $iconID
	 */
	public function getFalloffAttributeIDByIconID(int $iconID) {
		return $this->db->queryField("SELECT falloffAttributeID FROM dgmEffects WHERE iconID = :iconID", "falloffAttributeID", array(":iconID" => $iconID));
	}

	/**
	 * @param int $npcActivationChanceAttributeID
	 */
	public function getFalloffAttributeIDByNpcActivationChanceAttributeID(int $npcActivationChanceAttributeID) {
		return $this->db->queryField("SELECT falloffAttributeID FROM dgmEffects WHERE npcActivationChanceAttributeID = :npcActivationChanceAttributeID", "falloffAttributeID", array(":npcActivationChanceAttributeID" => $npcActivationChanceAttributeID));
	}

	/**
	 * @param int $npcUsageChanceAttributeID
	 */
	public function getFalloffAttributeIDByNpcUsageChanceAttributeID(int $npcUsageChanceAttributeID) {
		return $this->db->queryField("SELECT falloffAttributeID FROM dgmEffects WHERE npcUsageChanceAttributeID = :npcUsageChanceAttributeID", "falloffAttributeID", array(":npcUsageChanceAttributeID" => $npcUsageChanceAttributeID));
	}

	/**
	 * @param int $rangeAttributeID
	 */
	public function getFalloffAttributeIDByRangeAttributeID(int $rangeAttributeID) {
		return $this->db->queryField("SELECT falloffAttributeID FROM dgmEffects WHERE rangeAttributeID = :rangeAttributeID", "falloffAttributeID", array(":rangeAttributeID" => $rangeAttributeID));
	}

	/**
	 * @param string $sfxName
	 */
	public function getFalloffAttributeIDBySfxName(string $sfxName) {
		return $this->db->queryField("SELECT falloffAttributeID FROM dgmEffects WHERE sfxName = :sfxName", "falloffAttributeID", array(":sfxName" => $sfxName));
	}

	/**
	 * @param int $trackingSpeedAttributeID
	 */
	public function getFalloffAttributeIDByTrackingSpeedAttributeID(int $trackingSpeedAttributeID) {
		return $this->db->queryField("SELECT falloffAttributeID FROM dgmEffects WHERE trackingSpeedAttributeID = :trackingSpeedAttributeID", "falloffAttributeID", array(":trackingSpeedAttributeID" => $trackingSpeedAttributeID));
	}

	/**
	 * @param int $dischargeAttributeID
	 */
	public function getFittingUsageChanceAttributeIDByDischargeAttributeID(int $dischargeAttributeID) {
		return $this->db->queryField("SELECT fittingUsageChanceAttributeID FROM dgmEffects WHERE dischargeAttributeID = :dischargeAttributeID", "fittingUsageChanceAttributeID", array(":dischargeAttributeID" => $dischargeAttributeID));
	}

	/**
	 * @param string $displayName
	 */
	public function getFittingUsageChanceAttributeIDByDisplayName(string $displayName) {
		return $this->db->queryField("SELECT fittingUsageChanceAttributeID FROM dgmEffects WHERE displayName = :displayName", "fittingUsageChanceAttributeID", array(":displayName" => $displayName));
	}

	/**
	 * @param int $durationAttributeID
	 */
	public function getFittingUsageChanceAttributeIDByDurationAttributeID(int $durationAttributeID) {
		return $this->db->queryField("SELECT fittingUsageChanceAttributeID FROM dgmEffects WHERE durationAttributeID = :durationAttributeID", "fittingUsageChanceAttributeID", array(":durationAttributeID" => $durationAttributeID));
	}

	/**
	 * @param int $effectID
	 */
	public function getFittingUsageChanceAttributeIDByEffectID(int $effectID) {
		return $this->db->queryField("SELECT fittingUsageChanceAttributeID FROM dgmEffects WHERE effectID = :effectID", "fittingUsageChanceAttributeID", array(":effectID" => $effectID));
	}

	/**
	 * @param string $effectName
	 */
	public function getFittingUsageChanceAttributeIDByEffectName(string $effectName) {
		return $this->db->queryField("SELECT fittingUsageChanceAttributeID FROM dgmEffects WHERE effectName = :effectName", "fittingUsageChanceAttributeID", array(":effectName" => $effectName));
	}

	/**
	 * @param int $falloffAttributeID
	 */
	public function getFittingUsageChanceAttributeIDByFalloffAttributeID(int $falloffAttributeID) {
		return $this->db->queryField("SELECT fittingUsageChanceAttributeID FROM dgmEffects WHERE falloffAttributeID = :falloffAttributeID", "fittingUsageChanceAttributeID", array(":falloffAttributeID" => $falloffAttributeID));
	}

	/**
	 * @param int $iconID
	 */
	public function getFittingUsageChanceAttributeIDByIconID(int $iconID) {
		return $this->db->queryField("SELECT fittingUsageChanceAttributeID FROM dgmEffects WHERE iconID = :iconID", "fittingUsageChanceAttributeID", array(":iconID" => $iconID));
	}

	/**
	 * @param int $npcActivationChanceAttributeID
	 */
	public function getFittingUsageChanceAttributeIDByNpcActivationChanceAttributeID(int $npcActivationChanceAttributeID) {
		return $this->db->queryField("SELECT fittingUsageChanceAttributeID FROM dgmEffects WHERE npcActivationChanceAttributeID = :npcActivationChanceAttributeID", "fittingUsageChanceAttributeID", array(":npcActivationChanceAttributeID" => $npcActivationChanceAttributeID));
	}

	/**
	 * @param int $npcUsageChanceAttributeID
	 */
	public function getFittingUsageChanceAttributeIDByNpcUsageChanceAttributeID(int $npcUsageChanceAttributeID) {
		return $this->db->queryField("SELECT fittingUsageChanceAttributeID FROM dgmEffects WHERE npcUsageChanceAttributeID = :npcUsageChanceAttributeID", "fittingUsageChanceAttributeID", array(":npcUsageChanceAttributeID" => $npcUsageChanceAttributeID));
	}

	/**
	 * @param int $rangeAttributeID
	 */
	public function getFittingUsageChanceAttributeIDByRangeAttributeID(int $rangeAttributeID) {
		return $this->db->queryField("SELECT fittingUsageChanceAttributeID FROM dgmEffects WHERE rangeAttributeID = :rangeAttributeID", "fittingUsageChanceAttributeID", array(":rangeAttributeID" => $rangeAttributeID));
	}

	/**
	 * @param string $sfxName
	 */
	public function getFittingUsageChanceAttributeIDBySfxName(string $sfxName) {
		return $this->db->queryField("SELECT fittingUsageChanceAttributeID FROM dgmEffects WHERE sfxName = :sfxName", "fittingUsageChanceAttributeID", array(":sfxName" => $sfxName));
	}

	/**
	 * @param int $trackingSpeedAttributeID
	 */
	public function getFittingUsageChanceAttributeIDByTrackingSpeedAttributeID(int $trackingSpeedAttributeID) {
		return $this->db->queryField("SELECT fittingUsageChanceAttributeID FROM dgmEffects WHERE trackingSpeedAttributeID = :trackingSpeedAttributeID", "fittingUsageChanceAttributeID", array(":trackingSpeedAttributeID" => $trackingSpeedAttributeID));
	}

	/**
	 * @param int $dischargeAttributeID
	 */
	public function getGuidByDischargeAttributeID(int $dischargeAttributeID) {
		return $this->db->queryField("SELECT guid FROM dgmEffects WHERE dischargeAttributeID = :dischargeAttributeID", "guid", array(":dischargeAttributeID" => $dischargeAttributeID));
	}

	/**
	 * @param string $displayName
	 */
	public function getGuidByDisplayName(string $displayName) {
		return $this->db->queryField("SELECT guid FROM dgmEffects WHERE displayName = :displayName", "guid", array(":displayName" => $displayName));
	}

	/**
	 * @param int $durationAttributeID
	 */
	public function getGuidByDurationAttributeID(int $durationAttributeID) {
		return $this->db->queryField("SELECT guid FROM dgmEffects WHERE durationAttributeID = :durationAttributeID", "guid", array(":durationAttributeID" => $durationAttributeID));
	}

	/**
	 * @param int $effectID
	 */
	public function getGuidByEffectID(int $effectID) {
		return $this->db->queryField("SELECT guid FROM dgmEffects WHERE effectID = :effectID", "guid", array(":effectID" => $effectID));
	}

	/**
	 * @param string $effectName
	 */
	public function getGuidByEffectName(string $effectName) {
		return $this->db->queryField("SELECT guid FROM dgmEffects WHERE effectName = :effectName", "guid", array(":effectName" => $effectName));
	}

	/**
	 * @param int $falloffAttributeID
	 */
	public function getGuidByFalloffAttributeID(int $falloffAttributeID) {
		return $this->db->queryField("SELECT guid FROM dgmEffects WHERE falloffAttributeID = :falloffAttributeID", "guid", array(":falloffAttributeID" => $falloffAttributeID));
	}

	/**
	 * @param int $fittingUsageChanceAttributeID
	 */
	public function getGuidByFittingUsageChanceAttributeID(int $fittingUsageChanceAttributeID) {
		return $this->db->queryField("SELECT guid FROM dgmEffects WHERE fittingUsageChanceAttributeID = :fittingUsageChanceAttributeID", "guid", array(":fittingUsageChanceAttributeID" => $fittingUsageChanceAttributeID));
	}

	/**
	 * @param int $iconID
	 */
	public function getGuidByIconID(int $iconID) {
		return $this->db->queryField("SELECT guid FROM dgmEffects WHERE iconID = :iconID", "guid", array(":iconID" => $iconID));
	}

	/**
	 * @param int $npcActivationChanceAttributeID
	 */
	public function getGuidByNpcActivationChanceAttributeID(int $npcActivationChanceAttributeID) {
		return $this->db->queryField("SELECT guid FROM dgmEffects WHERE npcActivationChanceAttributeID = :npcActivationChanceAttributeID", "guid", array(":npcActivationChanceAttributeID" => $npcActivationChanceAttributeID));
	}

	/**
	 * @param int $npcUsageChanceAttributeID
	 */
	public function getGuidByNpcUsageChanceAttributeID(int $npcUsageChanceAttributeID) {
		return $this->db->queryField("SELECT guid FROM dgmEffects WHERE npcUsageChanceAttributeID = :npcUsageChanceAttributeID", "guid", array(":npcUsageChanceAttributeID" => $npcUsageChanceAttributeID));
	}

	/**
	 * @param int $rangeAttributeID
	 */
	public function getGuidByRangeAttributeID(int $rangeAttributeID) {
		return $this->db->queryField("SELECT guid FROM dgmEffects WHERE rangeAttributeID = :rangeAttributeID", "guid", array(":rangeAttributeID" => $rangeAttributeID));
	}

	/**
	 * @param string $sfxName
	 */
	public function getGuidBySfxName(string $sfxName) {
		return $this->db->queryField("SELECT guid FROM dgmEffects WHERE sfxName = :sfxName", "guid", array(":sfxName" => $sfxName));
	}

	/**
	 * @param int $trackingSpeedAttributeID
	 */
	public function getGuidByTrackingSpeedAttributeID(int $trackingSpeedAttributeID) {
		return $this->db->queryField("SELECT guid FROM dgmEffects WHERE trackingSpeedAttributeID = :trackingSpeedAttributeID", "guid", array(":trackingSpeedAttributeID" => $trackingSpeedAttributeID));
	}

	/**
	 * @param int $dischargeAttributeID
	 */
	public function getIconIDByDischargeAttributeID(int $dischargeAttributeID) {
		return $this->db->queryField("SELECT iconID FROM dgmEffects WHERE dischargeAttributeID = :dischargeAttributeID", "iconID", array(":dischargeAttributeID" => $dischargeAttributeID));
	}

	/**
	 * @param string $displayName
	 */
	public function getIconIDByDisplayName(string $displayName) {
		return $this->db->queryField("SELECT iconID FROM dgmEffects WHERE displayName = :displayName", "iconID", array(":displayName" => $displayName));
	}

	/**
	 * @param int $durationAttributeID
	 */
	public function getIconIDByDurationAttributeID(int $durationAttributeID) {
		return $this->db->queryField("SELECT iconID FROM dgmEffects WHERE durationAttributeID = :durationAttributeID", "iconID", array(":durationAttributeID" => $durationAttributeID));
	}

	/**
	 * @param int $effectID
	 */
	public function getIconIDByEffectID(int $effectID) {
		return $this->db->queryField("SELECT iconID FROM dgmEffects WHERE effectID = :effectID", "iconID", array(":effectID" => $effectID));
	}

	/**
	 * @param string $effectName
	 */
	public function getIconIDByEffectName(string $effectName) {
		return $this->db->queryField("SELECT iconID FROM dgmEffects WHERE effectName = :effectName", "iconID", array(":effectName" => $effectName));
	}

	/**
	 * @param int $falloffAttributeID
	 */
	public function getIconIDByFalloffAttributeID(int $falloffAttributeID) {
		return $this->db->queryField("SELECT iconID FROM dgmEffects WHERE falloffAttributeID = :falloffAttributeID", "iconID", array(":falloffAttributeID" => $falloffAttributeID));
	}

	/**
	 * @param int $fittingUsageChanceAttributeID
	 */
	public function getIconIDByFittingUsageChanceAttributeID(int $fittingUsageChanceAttributeID) {
		return $this->db->queryField("SELECT iconID FROM dgmEffects WHERE fittingUsageChanceAttributeID = :fittingUsageChanceAttributeID", "iconID", array(":fittingUsageChanceAttributeID" => $fittingUsageChanceAttributeID));
	}

	/**
	 * @param int $npcActivationChanceAttributeID
	 */
	public function getIconIDByNpcActivationChanceAttributeID(int $npcActivationChanceAttributeID) {
		return $this->db->queryField("SELECT iconID FROM dgmEffects WHERE npcActivationChanceAttributeID = :npcActivationChanceAttributeID", "iconID", array(":npcActivationChanceAttributeID" => $npcActivationChanceAttributeID));
	}

	/**
	 * @param int $npcUsageChanceAttributeID
	 */
	public function getIconIDByNpcUsageChanceAttributeID(int $npcUsageChanceAttributeID) {
		return $this->db->queryField("SELECT iconID FROM dgmEffects WHERE npcUsageChanceAttributeID = :npcUsageChanceAttributeID", "iconID", array(":npcUsageChanceAttributeID" => $npcUsageChanceAttributeID));
	}

	/**
	 * @param int $rangeAttributeID
	 */
	public function getIconIDByRangeAttributeID(int $rangeAttributeID) {
		return $this->db->queryField("SELECT iconID FROM dgmEffects WHERE rangeAttributeID = :rangeAttributeID", "iconID", array(":rangeAttributeID" => $rangeAttributeID));
	}

	/**
	 * @param string $sfxName
	 */
	public function getIconIDBySfxName(string $sfxName) {
		return $this->db->queryField("SELECT iconID FROM dgmEffects WHERE sfxName = :sfxName", "iconID", array(":sfxName" => $sfxName));
	}

	/**
	 * @param int $trackingSpeedAttributeID
	 */
	public function getIconIDByTrackingSpeedAttributeID(int $trackingSpeedAttributeID) {
		return $this->db->queryField("SELECT iconID FROM dgmEffects WHERE trackingSpeedAttributeID = :trackingSpeedAttributeID", "iconID", array(":trackingSpeedAttributeID" => $trackingSpeedAttributeID));
	}

	/**
	 * @param int $dischargeAttributeID
	 */
	public function getIsAssistanceByDischargeAttributeID(int $dischargeAttributeID) {
		return $this->db->queryField("SELECT isAssistance FROM dgmEffects WHERE dischargeAttributeID = :dischargeAttributeID", "isAssistance", array(":dischargeAttributeID" => $dischargeAttributeID));
	}

	/**
	 * @param string $displayName
	 */
	public function getIsAssistanceByDisplayName(string $displayName) {
		return $this->db->queryField("SELECT isAssistance FROM dgmEffects WHERE displayName = :displayName", "isAssistance", array(":displayName" => $displayName));
	}

	/**
	 * @param int $durationAttributeID
	 */
	public function getIsAssistanceByDurationAttributeID(int $durationAttributeID) {
		return $this->db->queryField("SELECT isAssistance FROM dgmEffects WHERE durationAttributeID = :durationAttributeID", "isAssistance", array(":durationAttributeID" => $durationAttributeID));
	}

	/**
	 * @param int $effectID
	 */
	public function getIsAssistanceByEffectID(int $effectID) {
		return $this->db->queryField("SELECT isAssistance FROM dgmEffects WHERE effectID = :effectID", "isAssistance", array(":effectID" => $effectID));
	}

	/**
	 * @param string $effectName
	 */
	public function getIsAssistanceByEffectName(string $effectName) {
		return $this->db->queryField("SELECT isAssistance FROM dgmEffects WHERE effectName = :effectName", "isAssistance", array(":effectName" => $effectName));
	}

	/**
	 * @param int $falloffAttributeID
	 */
	public function getIsAssistanceByFalloffAttributeID(int $falloffAttributeID) {
		return $this->db->queryField("SELECT isAssistance FROM dgmEffects WHERE falloffAttributeID = :falloffAttributeID", "isAssistance", array(":falloffAttributeID" => $falloffAttributeID));
	}

	/**
	 * @param int $fittingUsageChanceAttributeID
	 */
	public function getIsAssistanceByFittingUsageChanceAttributeID(int $fittingUsageChanceAttributeID) {
		return $this->db->queryField("SELECT isAssistance FROM dgmEffects WHERE fittingUsageChanceAttributeID = :fittingUsageChanceAttributeID", "isAssistance", array(":fittingUsageChanceAttributeID" => $fittingUsageChanceAttributeID));
	}

	/**
	 * @param int $iconID
	 */
	public function getIsAssistanceByIconID(int $iconID) {
		return $this->db->queryField("SELECT isAssistance FROM dgmEffects WHERE iconID = :iconID", "isAssistance", array(":iconID" => $iconID));
	}

	/**
	 * @param int $npcActivationChanceAttributeID
	 */
	public function getIsAssistanceByNpcActivationChanceAttributeID(int $npcActivationChanceAttributeID) {
		return $this->db->queryField("SELECT isAssistance FROM dgmEffects WHERE npcActivationChanceAttributeID = :npcActivationChanceAttributeID", "isAssistance", array(":npcActivationChanceAttributeID" => $npcActivationChanceAttributeID));
	}

	/**
	 * @param int $npcUsageChanceAttributeID
	 */
	public function getIsAssistanceByNpcUsageChanceAttributeID(int $npcUsageChanceAttributeID) {
		return $this->db->queryField("SELECT isAssistance FROM dgmEffects WHERE npcUsageChanceAttributeID = :npcUsageChanceAttributeID", "isAssistance", array(":npcUsageChanceAttributeID" => $npcUsageChanceAttributeID));
	}

	/**
	 * @param int $rangeAttributeID
	 */
	public function getIsAssistanceByRangeAttributeID(int $rangeAttributeID) {
		return $this->db->queryField("SELECT isAssistance FROM dgmEffects WHERE rangeAttributeID = :rangeAttributeID", "isAssistance", array(":rangeAttributeID" => $rangeAttributeID));
	}

	/**
	 * @param string $sfxName
	 */
	public function getIsAssistanceBySfxName(string $sfxName) {
		return $this->db->queryField("SELECT isAssistance FROM dgmEffects WHERE sfxName = :sfxName", "isAssistance", array(":sfxName" => $sfxName));
	}

	/**
	 * @param int $trackingSpeedAttributeID
	 */
	public function getIsAssistanceByTrackingSpeedAttributeID(int $trackingSpeedAttributeID) {
		return $this->db->queryField("SELECT isAssistance FROM dgmEffects WHERE trackingSpeedAttributeID = :trackingSpeedAttributeID", "isAssistance", array(":trackingSpeedAttributeID" => $trackingSpeedAttributeID));
	}

	/**
	 * @param int $dischargeAttributeID
	 */
	public function getIsOffensiveByDischargeAttributeID(int $dischargeAttributeID) {
		return $this->db->queryField("SELECT isOffensive FROM dgmEffects WHERE dischargeAttributeID = :dischargeAttributeID", "isOffensive", array(":dischargeAttributeID" => $dischargeAttributeID));
	}

	/**
	 * @param string $displayName
	 */
	public function getIsOffensiveByDisplayName(string $displayName) {
		return $this->db->queryField("SELECT isOffensive FROM dgmEffects WHERE displayName = :displayName", "isOffensive", array(":displayName" => $displayName));
	}

	/**
	 * @param int $durationAttributeID
	 */
	public function getIsOffensiveByDurationAttributeID(int $durationAttributeID) {
		return $this->db->queryField("SELECT isOffensive FROM dgmEffects WHERE durationAttributeID = :durationAttributeID", "isOffensive", array(":durationAttributeID" => $durationAttributeID));
	}

	/**
	 * @param int $effectID
	 */
	public function getIsOffensiveByEffectID(int $effectID) {
		return $this->db->queryField("SELECT isOffensive FROM dgmEffects WHERE effectID = :effectID", "isOffensive", array(":effectID" => $effectID));
	}

	/**
	 * @param string $effectName
	 */
	public function getIsOffensiveByEffectName(string $effectName) {
		return $this->db->queryField("SELECT isOffensive FROM dgmEffects WHERE effectName = :effectName", "isOffensive", array(":effectName" => $effectName));
	}

	/**
	 * @param int $falloffAttributeID
	 */
	public function getIsOffensiveByFalloffAttributeID(int $falloffAttributeID) {
		return $this->db->queryField("SELECT isOffensive FROM dgmEffects WHERE falloffAttributeID = :falloffAttributeID", "isOffensive", array(":falloffAttributeID" => $falloffAttributeID));
	}

	/**
	 * @param int $fittingUsageChanceAttributeID
	 */
	public function getIsOffensiveByFittingUsageChanceAttributeID(int $fittingUsageChanceAttributeID) {
		return $this->db->queryField("SELECT isOffensive FROM dgmEffects WHERE fittingUsageChanceAttributeID = :fittingUsageChanceAttributeID", "isOffensive", array(":fittingUsageChanceAttributeID" => $fittingUsageChanceAttributeID));
	}

	/**
	 * @param int $iconID
	 */
	public function getIsOffensiveByIconID(int $iconID) {
		return $this->db->queryField("SELECT isOffensive FROM dgmEffects WHERE iconID = :iconID", "isOffensive", array(":iconID" => $iconID));
	}

	/**
	 * @param int $npcActivationChanceAttributeID
	 */
	public function getIsOffensiveByNpcActivationChanceAttributeID(int $npcActivationChanceAttributeID) {
		return $this->db->queryField("SELECT isOffensive FROM dgmEffects WHERE npcActivationChanceAttributeID = :npcActivationChanceAttributeID", "isOffensive", array(":npcActivationChanceAttributeID" => $npcActivationChanceAttributeID));
	}

	/**
	 * @param int $npcUsageChanceAttributeID
	 */
	public function getIsOffensiveByNpcUsageChanceAttributeID(int $npcUsageChanceAttributeID) {
		return $this->db->queryField("SELECT isOffensive FROM dgmEffects WHERE npcUsageChanceAttributeID = :npcUsageChanceAttributeID", "isOffensive", array(":npcUsageChanceAttributeID" => $npcUsageChanceAttributeID));
	}

	/**
	 * @param int $rangeAttributeID
	 */
	public function getIsOffensiveByRangeAttributeID(int $rangeAttributeID) {
		return $this->db->queryField("SELECT isOffensive FROM dgmEffects WHERE rangeAttributeID = :rangeAttributeID", "isOffensive", array(":rangeAttributeID" => $rangeAttributeID));
	}

	/**
	 * @param string $sfxName
	 */
	public function getIsOffensiveBySfxName(string $sfxName) {
		return $this->db->queryField("SELECT isOffensive FROM dgmEffects WHERE sfxName = :sfxName", "isOffensive", array(":sfxName" => $sfxName));
	}

	/**
	 * @param int $trackingSpeedAttributeID
	 */
	public function getIsOffensiveByTrackingSpeedAttributeID(int $trackingSpeedAttributeID) {
		return $this->db->queryField("SELECT isOffensive FROM dgmEffects WHERE trackingSpeedAttributeID = :trackingSpeedAttributeID", "isOffensive", array(":trackingSpeedAttributeID" => $trackingSpeedAttributeID));
	}

	/**
	 * @param int $dischargeAttributeID
	 */
	public function getIsWarpSafeByDischargeAttributeID(int $dischargeAttributeID) {
		return $this->db->queryField("SELECT isWarpSafe FROM dgmEffects WHERE dischargeAttributeID = :dischargeAttributeID", "isWarpSafe", array(":dischargeAttributeID" => $dischargeAttributeID));
	}

	/**
	 * @param string $displayName
	 */
	public function getIsWarpSafeByDisplayName(string $displayName) {
		return $this->db->queryField("SELECT isWarpSafe FROM dgmEffects WHERE displayName = :displayName", "isWarpSafe", array(":displayName" => $displayName));
	}

	/**
	 * @param int $durationAttributeID
	 */
	public function getIsWarpSafeByDurationAttributeID(int $durationAttributeID) {
		return $this->db->queryField("SELECT isWarpSafe FROM dgmEffects WHERE durationAttributeID = :durationAttributeID", "isWarpSafe", array(":durationAttributeID" => $durationAttributeID));
	}

	/**
	 * @param int $effectID
	 */
	public function getIsWarpSafeByEffectID(int $effectID) {
		return $this->db->queryField("SELECT isWarpSafe FROM dgmEffects WHERE effectID = :effectID", "isWarpSafe", array(":effectID" => $effectID));
	}

	/**
	 * @param string $effectName
	 */
	public function getIsWarpSafeByEffectName(string $effectName) {
		return $this->db->queryField("SELECT isWarpSafe FROM dgmEffects WHERE effectName = :effectName", "isWarpSafe", array(":effectName" => $effectName));
	}

	/**
	 * @param int $falloffAttributeID
	 */
	public function getIsWarpSafeByFalloffAttributeID(int $falloffAttributeID) {
		return $this->db->queryField("SELECT isWarpSafe FROM dgmEffects WHERE falloffAttributeID = :falloffAttributeID", "isWarpSafe", array(":falloffAttributeID" => $falloffAttributeID));
	}

	/**
	 * @param int $fittingUsageChanceAttributeID
	 */
	public function getIsWarpSafeByFittingUsageChanceAttributeID(int $fittingUsageChanceAttributeID) {
		return $this->db->queryField("SELECT isWarpSafe FROM dgmEffects WHERE fittingUsageChanceAttributeID = :fittingUsageChanceAttributeID", "isWarpSafe", array(":fittingUsageChanceAttributeID" => $fittingUsageChanceAttributeID));
	}

	/**
	 * @param int $iconID
	 */
	public function getIsWarpSafeByIconID(int $iconID) {
		return $this->db->queryField("SELECT isWarpSafe FROM dgmEffects WHERE iconID = :iconID", "isWarpSafe", array(":iconID" => $iconID));
	}

	/**
	 * @param int $npcActivationChanceAttributeID
	 */
	public function getIsWarpSafeByNpcActivationChanceAttributeID(int $npcActivationChanceAttributeID) {
		return $this->db->queryField("SELECT isWarpSafe FROM dgmEffects WHERE npcActivationChanceAttributeID = :npcActivationChanceAttributeID", "isWarpSafe", array(":npcActivationChanceAttributeID" => $npcActivationChanceAttributeID));
	}

	/**
	 * @param int $npcUsageChanceAttributeID
	 */
	public function getIsWarpSafeByNpcUsageChanceAttributeID(int $npcUsageChanceAttributeID) {
		return $this->db->queryField("SELECT isWarpSafe FROM dgmEffects WHERE npcUsageChanceAttributeID = :npcUsageChanceAttributeID", "isWarpSafe", array(":npcUsageChanceAttributeID" => $npcUsageChanceAttributeID));
	}

	/**
	 * @param int $rangeAttributeID
	 */
	public function getIsWarpSafeByRangeAttributeID(int $rangeAttributeID) {
		return $this->db->queryField("SELECT isWarpSafe FROM dgmEffects WHERE rangeAttributeID = :rangeAttributeID", "isWarpSafe", array(":rangeAttributeID" => $rangeAttributeID));
	}

	/**
	 * @param string $sfxName
	 */
	public function getIsWarpSafeBySfxName(string $sfxName) {
		return $this->db->queryField("SELECT isWarpSafe FROM dgmEffects WHERE sfxName = :sfxName", "isWarpSafe", array(":sfxName" => $sfxName));
	}

	/**
	 * @param int $trackingSpeedAttributeID
	 */
	public function getIsWarpSafeByTrackingSpeedAttributeID(int $trackingSpeedAttributeID) {
		return $this->db->queryField("SELECT isWarpSafe FROM dgmEffects WHERE trackingSpeedAttributeID = :trackingSpeedAttributeID", "isWarpSafe", array(":trackingSpeedAttributeID" => $trackingSpeedAttributeID));
	}

	/**
	 * @param int $dischargeAttributeID
	 */
	public function getModifierInfoByDischargeAttributeID(int $dischargeAttributeID) {
		return $this->db->queryField("SELECT modifierInfo FROM dgmEffects WHERE dischargeAttributeID = :dischargeAttributeID", "modifierInfo", array(":dischargeAttributeID" => $dischargeAttributeID));
	}

	/**
	 * @param string $displayName
	 */
	public function getModifierInfoByDisplayName(string $displayName) {
		return $this->db->queryField("SELECT modifierInfo FROM dgmEffects WHERE displayName = :displayName", "modifierInfo", array(":displayName" => $displayName));
	}

	/**
	 * @param int $durationAttributeID
	 */
	public function getModifierInfoByDurationAttributeID(int $durationAttributeID) {
		return $this->db->queryField("SELECT modifierInfo FROM dgmEffects WHERE durationAttributeID = :durationAttributeID", "modifierInfo", array(":durationAttributeID" => $durationAttributeID));
	}

	/**
	 * @param int $effectID
	 */
	public function getModifierInfoByEffectID(int $effectID) {
		return $this->db->queryField("SELECT modifierInfo FROM dgmEffects WHERE effectID = :effectID", "modifierInfo", array(":effectID" => $effectID));
	}

	/**
	 * @param string $effectName
	 */
	public function getModifierInfoByEffectName(string $effectName) {
		return $this->db->queryField("SELECT modifierInfo FROM dgmEffects WHERE effectName = :effectName", "modifierInfo", array(":effectName" => $effectName));
	}

	/**
	 * @param int $falloffAttributeID
	 */
	public function getModifierInfoByFalloffAttributeID(int $falloffAttributeID) {
		return $this->db->queryField("SELECT modifierInfo FROM dgmEffects WHERE falloffAttributeID = :falloffAttributeID", "modifierInfo", array(":falloffAttributeID" => $falloffAttributeID));
	}

	/**
	 * @param int $fittingUsageChanceAttributeID
	 */
	public function getModifierInfoByFittingUsageChanceAttributeID(int $fittingUsageChanceAttributeID) {
		return $this->db->queryField("SELECT modifierInfo FROM dgmEffects WHERE fittingUsageChanceAttributeID = :fittingUsageChanceAttributeID", "modifierInfo", array(":fittingUsageChanceAttributeID" => $fittingUsageChanceAttributeID));
	}

	/**
	 * @param int $iconID
	 */
	public function getModifierInfoByIconID(int $iconID) {
		return $this->db->queryField("SELECT modifierInfo FROM dgmEffects WHERE iconID = :iconID", "modifierInfo", array(":iconID" => $iconID));
	}

	/**
	 * @param int $npcActivationChanceAttributeID
	 */
	public function getModifierInfoByNpcActivationChanceAttributeID(int $npcActivationChanceAttributeID) {
		return $this->db->queryField("SELECT modifierInfo FROM dgmEffects WHERE npcActivationChanceAttributeID = :npcActivationChanceAttributeID", "modifierInfo", array(":npcActivationChanceAttributeID" => $npcActivationChanceAttributeID));
	}

	/**
	 * @param int $npcUsageChanceAttributeID
	 */
	public function getModifierInfoByNpcUsageChanceAttributeID(int $npcUsageChanceAttributeID) {
		return $this->db->queryField("SELECT modifierInfo FROM dgmEffects WHERE npcUsageChanceAttributeID = :npcUsageChanceAttributeID", "modifierInfo", array(":npcUsageChanceAttributeID" => $npcUsageChanceAttributeID));
	}

	/**
	 * @param int $rangeAttributeID
	 */
	public function getModifierInfoByRangeAttributeID(int $rangeAttributeID) {
		return $this->db->queryField("SELECT modifierInfo FROM dgmEffects WHERE rangeAttributeID = :rangeAttributeID", "modifierInfo", array(":rangeAttributeID" => $rangeAttributeID));
	}

	/**
	 * @param string $sfxName
	 */
	public function getModifierInfoBySfxName(string $sfxName) {
		return $this->db->queryField("SELECT modifierInfo FROM dgmEffects WHERE sfxName = :sfxName", "modifierInfo", array(":sfxName" => $sfxName));
	}

	/**
	 * @param int $trackingSpeedAttributeID
	 */
	public function getModifierInfoByTrackingSpeedAttributeID(int $trackingSpeedAttributeID) {
		return $this->db->queryField("SELECT modifierInfo FROM dgmEffects WHERE trackingSpeedAttributeID = :trackingSpeedAttributeID", "modifierInfo", array(":trackingSpeedAttributeID" => $trackingSpeedAttributeID));
	}

	/**
	 * @param int $dischargeAttributeID
	 */
	public function getNpcActivationChanceAttributeIDByDischargeAttributeID(int $dischargeAttributeID) {
		return $this->db->queryField("SELECT npcActivationChanceAttributeID FROM dgmEffects WHERE dischargeAttributeID = :dischargeAttributeID", "npcActivationChanceAttributeID", array(":dischargeAttributeID" => $dischargeAttributeID));
	}

	/**
	 * @param string $displayName
	 */
	public function getNpcActivationChanceAttributeIDByDisplayName(string $displayName) {
		return $this->db->queryField("SELECT npcActivationChanceAttributeID FROM dgmEffects WHERE displayName = :displayName", "npcActivationChanceAttributeID", array(":displayName" => $displayName));
	}

	/**
	 * @param int $durationAttributeID
	 */
	public function getNpcActivationChanceAttributeIDByDurationAttributeID(int $durationAttributeID) {
		return $this->db->queryField("SELECT npcActivationChanceAttributeID FROM dgmEffects WHERE durationAttributeID = :durationAttributeID", "npcActivationChanceAttributeID", array(":durationAttributeID" => $durationAttributeID));
	}

	/**
	 * @param int $effectID
	 */
	public function getNpcActivationChanceAttributeIDByEffectID(int $effectID) {
		return $this->db->queryField("SELECT npcActivationChanceAttributeID FROM dgmEffects WHERE effectID = :effectID", "npcActivationChanceAttributeID", array(":effectID" => $effectID));
	}

	/**
	 * @param string $effectName
	 */
	public function getNpcActivationChanceAttributeIDByEffectName(string $effectName) {
		return $this->db->queryField("SELECT npcActivationChanceAttributeID FROM dgmEffects WHERE effectName = :effectName", "npcActivationChanceAttributeID", array(":effectName" => $effectName));
	}

	/**
	 * @param int $falloffAttributeID
	 */
	public function getNpcActivationChanceAttributeIDByFalloffAttributeID(int $falloffAttributeID) {
		return $this->db->queryField("SELECT npcActivationChanceAttributeID FROM dgmEffects WHERE falloffAttributeID = :falloffAttributeID", "npcActivationChanceAttributeID", array(":falloffAttributeID" => $falloffAttributeID));
	}

	/**
	 * @param int $fittingUsageChanceAttributeID
	 */
	public function getNpcActivationChanceAttributeIDByFittingUsageChanceAttributeID(int $fittingUsageChanceAttributeID) {
		return $this->db->queryField("SELECT npcActivationChanceAttributeID FROM dgmEffects WHERE fittingUsageChanceAttributeID = :fittingUsageChanceAttributeID", "npcActivationChanceAttributeID", array(":fittingUsageChanceAttributeID" => $fittingUsageChanceAttributeID));
	}

	/**
	 * @param int $iconID
	 */
	public function getNpcActivationChanceAttributeIDByIconID(int $iconID) {
		return $this->db->queryField("SELECT npcActivationChanceAttributeID FROM dgmEffects WHERE iconID = :iconID", "npcActivationChanceAttributeID", array(":iconID" => $iconID));
	}

	/**
	 * @param int $npcUsageChanceAttributeID
	 */
	public function getNpcActivationChanceAttributeIDByNpcUsageChanceAttributeID(int $npcUsageChanceAttributeID) {
		return $this->db->queryField("SELECT npcActivationChanceAttributeID FROM dgmEffects WHERE npcUsageChanceAttributeID = :npcUsageChanceAttributeID", "npcActivationChanceAttributeID", array(":npcUsageChanceAttributeID" => $npcUsageChanceAttributeID));
	}

	/**
	 * @param int $rangeAttributeID
	 */
	public function getNpcActivationChanceAttributeIDByRangeAttributeID(int $rangeAttributeID) {
		return $this->db->queryField("SELECT npcActivationChanceAttributeID FROM dgmEffects WHERE rangeAttributeID = :rangeAttributeID", "npcActivationChanceAttributeID", array(":rangeAttributeID" => $rangeAttributeID));
	}

	/**
	 * @param string $sfxName
	 */
	public function getNpcActivationChanceAttributeIDBySfxName(string $sfxName) {
		return $this->db->queryField("SELECT npcActivationChanceAttributeID FROM dgmEffects WHERE sfxName = :sfxName", "npcActivationChanceAttributeID", array(":sfxName" => $sfxName));
	}

	/**
	 * @param int $trackingSpeedAttributeID
	 */
	public function getNpcActivationChanceAttributeIDByTrackingSpeedAttributeID(int $trackingSpeedAttributeID) {
		return $this->db->queryField("SELECT npcActivationChanceAttributeID FROM dgmEffects WHERE trackingSpeedAttributeID = :trackingSpeedAttributeID", "npcActivationChanceAttributeID", array(":trackingSpeedAttributeID" => $trackingSpeedAttributeID));
	}

	/**
	 * @param int $dischargeAttributeID
	 */
	public function getNpcUsageChanceAttributeIDByDischargeAttributeID(int $dischargeAttributeID) {
		return $this->db->queryField("SELECT npcUsageChanceAttributeID FROM dgmEffects WHERE dischargeAttributeID = :dischargeAttributeID", "npcUsageChanceAttributeID", array(":dischargeAttributeID" => $dischargeAttributeID));
	}

	/**
	 * @param string $displayName
	 */
	public function getNpcUsageChanceAttributeIDByDisplayName(string $displayName) {
		return $this->db->queryField("SELECT npcUsageChanceAttributeID FROM dgmEffects WHERE displayName = :displayName", "npcUsageChanceAttributeID", array(":displayName" => $displayName));
	}

	/**
	 * @param int $durationAttributeID
	 */
	public function getNpcUsageChanceAttributeIDByDurationAttributeID(int $durationAttributeID) {
		return $this->db->queryField("SELECT npcUsageChanceAttributeID FROM dgmEffects WHERE durationAttributeID = :durationAttributeID", "npcUsageChanceAttributeID", array(":durationAttributeID" => $durationAttributeID));
	}

	/**
	 * @param int $effectID
	 */
	public function getNpcUsageChanceAttributeIDByEffectID(int $effectID) {
		return $this->db->queryField("SELECT npcUsageChanceAttributeID FROM dgmEffects WHERE effectID = :effectID", "npcUsageChanceAttributeID", array(":effectID" => $effectID));
	}

	/**
	 * @param string $effectName
	 */
	public function getNpcUsageChanceAttributeIDByEffectName(string $effectName) {
		return $this->db->queryField("SELECT npcUsageChanceAttributeID FROM dgmEffects WHERE effectName = :effectName", "npcUsageChanceAttributeID", array(":effectName" => $effectName));
	}

	/**
	 * @param int $falloffAttributeID
	 */
	public function getNpcUsageChanceAttributeIDByFalloffAttributeID(int $falloffAttributeID) {
		return $this->db->queryField("SELECT npcUsageChanceAttributeID FROM dgmEffects WHERE falloffAttributeID = :falloffAttributeID", "npcUsageChanceAttributeID", array(":falloffAttributeID" => $falloffAttributeID));
	}

	/**
	 * @param int $fittingUsageChanceAttributeID
	 */
	public function getNpcUsageChanceAttributeIDByFittingUsageChanceAttributeID(int $fittingUsageChanceAttributeID) {
		return $this->db->queryField("SELECT npcUsageChanceAttributeID FROM dgmEffects WHERE fittingUsageChanceAttributeID = :fittingUsageChanceAttributeID", "npcUsageChanceAttributeID", array(":fittingUsageChanceAttributeID" => $fittingUsageChanceAttributeID));
	}

	/**
	 * @param int $iconID
	 */
	public function getNpcUsageChanceAttributeIDByIconID(int $iconID) {
		return $this->db->queryField("SELECT npcUsageChanceAttributeID FROM dgmEffects WHERE iconID = :iconID", "npcUsageChanceAttributeID", array(":iconID" => $iconID));
	}

	/**
	 * @param int $npcActivationChanceAttributeID
	 */
	public function getNpcUsageChanceAttributeIDByNpcActivationChanceAttributeID(int $npcActivationChanceAttributeID) {
		return $this->db->queryField("SELECT npcUsageChanceAttributeID FROM dgmEffects WHERE npcActivationChanceAttributeID = :npcActivationChanceAttributeID", "npcUsageChanceAttributeID", array(":npcActivationChanceAttributeID" => $npcActivationChanceAttributeID));
	}

	/**
	 * @param int $rangeAttributeID
	 */
	public function getNpcUsageChanceAttributeIDByRangeAttributeID(int $rangeAttributeID) {
		return $this->db->queryField("SELECT npcUsageChanceAttributeID FROM dgmEffects WHERE rangeAttributeID = :rangeAttributeID", "npcUsageChanceAttributeID", array(":rangeAttributeID" => $rangeAttributeID));
	}

	/**
	 * @param string $sfxName
	 */
	public function getNpcUsageChanceAttributeIDBySfxName(string $sfxName) {
		return $this->db->queryField("SELECT npcUsageChanceAttributeID FROM dgmEffects WHERE sfxName = :sfxName", "npcUsageChanceAttributeID", array(":sfxName" => $sfxName));
	}

	/**
	 * @param int $trackingSpeedAttributeID
	 */
	public function getNpcUsageChanceAttributeIDByTrackingSpeedAttributeID(int $trackingSpeedAttributeID) {
		return $this->db->queryField("SELECT npcUsageChanceAttributeID FROM dgmEffects WHERE trackingSpeedAttributeID = :trackingSpeedAttributeID", "npcUsageChanceAttributeID", array(":trackingSpeedAttributeID" => $trackingSpeedAttributeID));
	}

	/**
	 * @param int $dischargeAttributeID
	 */
	public function getPostExpressionByDischargeAttributeID(int $dischargeAttributeID) {
		return $this->db->queryField("SELECT postExpression FROM dgmEffects WHERE dischargeAttributeID = :dischargeAttributeID", "postExpression", array(":dischargeAttributeID" => $dischargeAttributeID));
	}

	/**
	 * @param string $displayName
	 */
	public function getPostExpressionByDisplayName(string $displayName) {
		return $this->db->queryField("SELECT postExpression FROM dgmEffects WHERE displayName = :displayName", "postExpression", array(":displayName" => $displayName));
	}

	/**
	 * @param int $durationAttributeID
	 */
	public function getPostExpressionByDurationAttributeID(int $durationAttributeID) {
		return $this->db->queryField("SELECT postExpression FROM dgmEffects WHERE durationAttributeID = :durationAttributeID", "postExpression", array(":durationAttributeID" => $durationAttributeID));
	}

	/**
	 * @param int $effectID
	 */
	public function getPostExpressionByEffectID(int $effectID) {
		return $this->db->queryField("SELECT postExpression FROM dgmEffects WHERE effectID = :effectID", "postExpression", array(":effectID" => $effectID));
	}

	/**
	 * @param string $effectName
	 */
	public function getPostExpressionByEffectName(string $effectName) {
		return $this->db->queryField("SELECT postExpression FROM dgmEffects WHERE effectName = :effectName", "postExpression", array(":effectName" => $effectName));
	}

	/**
	 * @param int $falloffAttributeID
	 */
	public function getPostExpressionByFalloffAttributeID(int $falloffAttributeID) {
		return $this->db->queryField("SELECT postExpression FROM dgmEffects WHERE falloffAttributeID = :falloffAttributeID", "postExpression", array(":falloffAttributeID" => $falloffAttributeID));
	}

	/**
	 * @param int $fittingUsageChanceAttributeID
	 */
	public function getPostExpressionByFittingUsageChanceAttributeID(int $fittingUsageChanceAttributeID) {
		return $this->db->queryField("SELECT postExpression FROM dgmEffects WHERE fittingUsageChanceAttributeID = :fittingUsageChanceAttributeID", "postExpression", array(":fittingUsageChanceAttributeID" => $fittingUsageChanceAttributeID));
	}

	/**
	 * @param int $iconID
	 */
	public function getPostExpressionByIconID(int $iconID) {
		return $this->db->queryField("SELECT postExpression FROM dgmEffects WHERE iconID = :iconID", "postExpression", array(":iconID" => $iconID));
	}

	/**
	 * @param int $npcActivationChanceAttributeID
	 */
	public function getPostExpressionByNpcActivationChanceAttributeID(int $npcActivationChanceAttributeID) {
		return $this->db->queryField("SELECT postExpression FROM dgmEffects WHERE npcActivationChanceAttributeID = :npcActivationChanceAttributeID", "postExpression", array(":npcActivationChanceAttributeID" => $npcActivationChanceAttributeID));
	}

	/**
	 * @param int $npcUsageChanceAttributeID
	 */
	public function getPostExpressionByNpcUsageChanceAttributeID(int $npcUsageChanceAttributeID) {
		return $this->db->queryField("SELECT postExpression FROM dgmEffects WHERE npcUsageChanceAttributeID = :npcUsageChanceAttributeID", "postExpression", array(":npcUsageChanceAttributeID" => $npcUsageChanceAttributeID));
	}

	/**
	 * @param int $rangeAttributeID
	 */
	public function getPostExpressionByRangeAttributeID(int $rangeAttributeID) {
		return $this->db->queryField("SELECT postExpression FROM dgmEffects WHERE rangeAttributeID = :rangeAttributeID", "postExpression", array(":rangeAttributeID" => $rangeAttributeID));
	}

	/**
	 * @param string $sfxName
	 */
	public function getPostExpressionBySfxName(string $sfxName) {
		return $this->db->queryField("SELECT postExpression FROM dgmEffects WHERE sfxName = :sfxName", "postExpression", array(":sfxName" => $sfxName));
	}

	/**
	 * @param int $trackingSpeedAttributeID
	 */
	public function getPostExpressionByTrackingSpeedAttributeID(int $trackingSpeedAttributeID) {
		return $this->db->queryField("SELECT postExpression FROM dgmEffects WHERE trackingSpeedAttributeID = :trackingSpeedAttributeID", "postExpression", array(":trackingSpeedAttributeID" => $trackingSpeedAttributeID));
	}

	/**
	 * @param int $dischargeAttributeID
	 */
	public function getPreExpressionByDischargeAttributeID(int $dischargeAttributeID) {
		return $this->db->queryField("SELECT preExpression FROM dgmEffects WHERE dischargeAttributeID = :dischargeAttributeID", "preExpression", array(":dischargeAttributeID" => $dischargeAttributeID));
	}

	/**
	 * @param string $displayName
	 */
	public function getPreExpressionByDisplayName(string $displayName) {
		return $this->db->queryField("SELECT preExpression FROM dgmEffects WHERE displayName = :displayName", "preExpression", array(":displayName" => $displayName));
	}

	/**
	 * @param int $durationAttributeID
	 */
	public function getPreExpressionByDurationAttributeID(int $durationAttributeID) {
		return $this->db->queryField("SELECT preExpression FROM dgmEffects WHERE durationAttributeID = :durationAttributeID", "preExpression", array(":durationAttributeID" => $durationAttributeID));
	}

	/**
	 * @param int $effectID
	 */
	public function getPreExpressionByEffectID(int $effectID) {
		return $this->db->queryField("SELECT preExpression FROM dgmEffects WHERE effectID = :effectID", "preExpression", array(":effectID" => $effectID));
	}

	/**
	 * @param string $effectName
	 */
	public function getPreExpressionByEffectName(string $effectName) {
		return $this->db->queryField("SELECT preExpression FROM dgmEffects WHERE effectName = :effectName", "preExpression", array(":effectName" => $effectName));
	}

	/**
	 * @param int $falloffAttributeID
	 */
	public function getPreExpressionByFalloffAttributeID(int $falloffAttributeID) {
		return $this->db->queryField("SELECT preExpression FROM dgmEffects WHERE falloffAttributeID = :falloffAttributeID", "preExpression", array(":falloffAttributeID" => $falloffAttributeID));
	}

	/**
	 * @param int $fittingUsageChanceAttributeID
	 */
	public function getPreExpressionByFittingUsageChanceAttributeID(int $fittingUsageChanceAttributeID) {
		return $this->db->queryField("SELECT preExpression FROM dgmEffects WHERE fittingUsageChanceAttributeID = :fittingUsageChanceAttributeID", "preExpression", array(":fittingUsageChanceAttributeID" => $fittingUsageChanceAttributeID));
	}

	/**
	 * @param int $iconID
	 */
	public function getPreExpressionByIconID(int $iconID) {
		return $this->db->queryField("SELECT preExpression FROM dgmEffects WHERE iconID = :iconID", "preExpression", array(":iconID" => $iconID));
	}

	/**
	 * @param int $npcActivationChanceAttributeID
	 */
	public function getPreExpressionByNpcActivationChanceAttributeID(int $npcActivationChanceAttributeID) {
		return $this->db->queryField("SELECT preExpression FROM dgmEffects WHERE npcActivationChanceAttributeID = :npcActivationChanceAttributeID", "preExpression", array(":npcActivationChanceAttributeID" => $npcActivationChanceAttributeID));
	}

	/**
	 * @param int $npcUsageChanceAttributeID
	 */
	public function getPreExpressionByNpcUsageChanceAttributeID(int $npcUsageChanceAttributeID) {
		return $this->db->queryField("SELECT preExpression FROM dgmEffects WHERE npcUsageChanceAttributeID = :npcUsageChanceAttributeID", "preExpression", array(":npcUsageChanceAttributeID" => $npcUsageChanceAttributeID));
	}

	/**
	 * @param int $rangeAttributeID
	 */
	public function getPreExpressionByRangeAttributeID(int $rangeAttributeID) {
		return $this->db->queryField("SELECT preExpression FROM dgmEffects WHERE rangeAttributeID = :rangeAttributeID", "preExpression", array(":rangeAttributeID" => $rangeAttributeID));
	}

	/**
	 * @param string $sfxName
	 */
	public function getPreExpressionBySfxName(string $sfxName) {
		return $this->db->queryField("SELECT preExpression FROM dgmEffects WHERE sfxName = :sfxName", "preExpression", array(":sfxName" => $sfxName));
	}

	/**
	 * @param int $trackingSpeedAttributeID
	 */
	public function getPreExpressionByTrackingSpeedAttributeID(int $trackingSpeedAttributeID) {
		return $this->db->queryField("SELECT preExpression FROM dgmEffects WHERE trackingSpeedAttributeID = :trackingSpeedAttributeID", "preExpression", array(":trackingSpeedAttributeID" => $trackingSpeedAttributeID));
	}

	/**
	 * @param int $dischargeAttributeID
	 */
	public function getPropulsionChanceByDischargeAttributeID(int $dischargeAttributeID) {
		return $this->db->queryField("SELECT propulsionChance FROM dgmEffects WHERE dischargeAttributeID = :dischargeAttributeID", "propulsionChance", array(":dischargeAttributeID" => $dischargeAttributeID));
	}

	/**
	 * @param string $displayName
	 */
	public function getPropulsionChanceByDisplayName(string $displayName) {
		return $this->db->queryField("SELECT propulsionChance FROM dgmEffects WHERE displayName = :displayName", "propulsionChance", array(":displayName" => $displayName));
	}

	/**
	 * @param int $durationAttributeID
	 */
	public function getPropulsionChanceByDurationAttributeID(int $durationAttributeID) {
		return $this->db->queryField("SELECT propulsionChance FROM dgmEffects WHERE durationAttributeID = :durationAttributeID", "propulsionChance", array(":durationAttributeID" => $durationAttributeID));
	}

	/**
	 * @param int $effectID
	 */
	public function getPropulsionChanceByEffectID(int $effectID) {
		return $this->db->queryField("SELECT propulsionChance FROM dgmEffects WHERE effectID = :effectID", "propulsionChance", array(":effectID" => $effectID));
	}

	/**
	 * @param string $effectName
	 */
	public function getPropulsionChanceByEffectName(string $effectName) {
		return $this->db->queryField("SELECT propulsionChance FROM dgmEffects WHERE effectName = :effectName", "propulsionChance", array(":effectName" => $effectName));
	}

	/**
	 * @param int $falloffAttributeID
	 */
	public function getPropulsionChanceByFalloffAttributeID(int $falloffAttributeID) {
		return $this->db->queryField("SELECT propulsionChance FROM dgmEffects WHERE falloffAttributeID = :falloffAttributeID", "propulsionChance", array(":falloffAttributeID" => $falloffAttributeID));
	}

	/**
	 * @param int $fittingUsageChanceAttributeID
	 */
	public function getPropulsionChanceByFittingUsageChanceAttributeID(int $fittingUsageChanceAttributeID) {
		return $this->db->queryField("SELECT propulsionChance FROM dgmEffects WHERE fittingUsageChanceAttributeID = :fittingUsageChanceAttributeID", "propulsionChance", array(":fittingUsageChanceAttributeID" => $fittingUsageChanceAttributeID));
	}

	/**
	 * @param int $iconID
	 */
	public function getPropulsionChanceByIconID(int $iconID) {
		return $this->db->queryField("SELECT propulsionChance FROM dgmEffects WHERE iconID = :iconID", "propulsionChance", array(":iconID" => $iconID));
	}

	/**
	 * @param int $npcActivationChanceAttributeID
	 */
	public function getPropulsionChanceByNpcActivationChanceAttributeID(int $npcActivationChanceAttributeID) {
		return $this->db->queryField("SELECT propulsionChance FROM dgmEffects WHERE npcActivationChanceAttributeID = :npcActivationChanceAttributeID", "propulsionChance", array(":npcActivationChanceAttributeID" => $npcActivationChanceAttributeID));
	}

	/**
	 * @param int $npcUsageChanceAttributeID
	 */
	public function getPropulsionChanceByNpcUsageChanceAttributeID(int $npcUsageChanceAttributeID) {
		return $this->db->queryField("SELECT propulsionChance FROM dgmEffects WHERE npcUsageChanceAttributeID = :npcUsageChanceAttributeID", "propulsionChance", array(":npcUsageChanceAttributeID" => $npcUsageChanceAttributeID));
	}

	/**
	 * @param int $rangeAttributeID
	 */
	public function getPropulsionChanceByRangeAttributeID(int $rangeAttributeID) {
		return $this->db->queryField("SELECT propulsionChance FROM dgmEffects WHERE rangeAttributeID = :rangeAttributeID", "propulsionChance", array(":rangeAttributeID" => $rangeAttributeID));
	}

	/**
	 * @param string $sfxName
	 */
	public function getPropulsionChanceBySfxName(string $sfxName) {
		return $this->db->queryField("SELECT propulsionChance FROM dgmEffects WHERE sfxName = :sfxName", "propulsionChance", array(":sfxName" => $sfxName));
	}

	/**
	 * @param int $trackingSpeedAttributeID
	 */
	public function getPropulsionChanceByTrackingSpeedAttributeID(int $trackingSpeedAttributeID) {
		return $this->db->queryField("SELECT propulsionChance FROM dgmEffects WHERE trackingSpeedAttributeID = :trackingSpeedAttributeID", "propulsionChance", array(":trackingSpeedAttributeID" => $trackingSpeedAttributeID));
	}

	/**
	 * @param int $dischargeAttributeID
	 */
	public function getPublishedByDischargeAttributeID(int $dischargeAttributeID) {
		return $this->db->queryField("SELECT published FROM dgmEffects WHERE dischargeAttributeID = :dischargeAttributeID", "published", array(":dischargeAttributeID" => $dischargeAttributeID));
	}

	/**
	 * @param string $displayName
	 */
	public function getPublishedByDisplayName(string $displayName) {
		return $this->db->queryField("SELECT published FROM dgmEffects WHERE displayName = :displayName", "published", array(":displayName" => $displayName));
	}

	/**
	 * @param int $durationAttributeID
	 */
	public function getPublishedByDurationAttributeID(int $durationAttributeID) {
		return $this->db->queryField("SELECT published FROM dgmEffects WHERE durationAttributeID = :durationAttributeID", "published", array(":durationAttributeID" => $durationAttributeID));
	}

	/**
	 * @param int $effectID
	 */
	public function getPublishedByEffectID(int $effectID) {
		return $this->db->queryField("SELECT published FROM dgmEffects WHERE effectID = :effectID", "published", array(":effectID" => $effectID));
	}

	/**
	 * @param string $effectName
	 */
	public function getPublishedByEffectName(string $effectName) {
		return $this->db->queryField("SELECT published FROM dgmEffects WHERE effectName = :effectName", "published", array(":effectName" => $effectName));
	}

	/**
	 * @param int $falloffAttributeID
	 */
	public function getPublishedByFalloffAttributeID(int $falloffAttributeID) {
		return $this->db->queryField("SELECT published FROM dgmEffects WHERE falloffAttributeID = :falloffAttributeID", "published", array(":falloffAttributeID" => $falloffAttributeID));
	}

	/**
	 * @param int $fittingUsageChanceAttributeID
	 */
	public function getPublishedByFittingUsageChanceAttributeID(int $fittingUsageChanceAttributeID) {
		return $this->db->queryField("SELECT published FROM dgmEffects WHERE fittingUsageChanceAttributeID = :fittingUsageChanceAttributeID", "published", array(":fittingUsageChanceAttributeID" => $fittingUsageChanceAttributeID));
	}

	/**
	 * @param int $iconID
	 */
	public function getPublishedByIconID(int $iconID) {
		return $this->db->queryField("SELECT published FROM dgmEffects WHERE iconID = :iconID", "published", array(":iconID" => $iconID));
	}

	/**
	 * @param int $npcActivationChanceAttributeID
	 */
	public function getPublishedByNpcActivationChanceAttributeID(int $npcActivationChanceAttributeID) {
		return $this->db->queryField("SELECT published FROM dgmEffects WHERE npcActivationChanceAttributeID = :npcActivationChanceAttributeID", "published", array(":npcActivationChanceAttributeID" => $npcActivationChanceAttributeID));
	}

	/**
	 * @param int $npcUsageChanceAttributeID
	 */
	public function getPublishedByNpcUsageChanceAttributeID(int $npcUsageChanceAttributeID) {
		return $this->db->queryField("SELECT published FROM dgmEffects WHERE npcUsageChanceAttributeID = :npcUsageChanceAttributeID", "published", array(":npcUsageChanceAttributeID" => $npcUsageChanceAttributeID));
	}

	/**
	 * @param int $rangeAttributeID
	 */
	public function getPublishedByRangeAttributeID(int $rangeAttributeID) {
		return $this->db->queryField("SELECT published FROM dgmEffects WHERE rangeAttributeID = :rangeAttributeID", "published", array(":rangeAttributeID" => $rangeAttributeID));
	}

	/**
	 * @param string $sfxName
	 */
	public function getPublishedBySfxName(string $sfxName) {
		return $this->db->queryField("SELECT published FROM dgmEffects WHERE sfxName = :sfxName", "published", array(":sfxName" => $sfxName));
	}

	/**
	 * @param int $trackingSpeedAttributeID
	 */
	public function getPublishedByTrackingSpeedAttributeID(int $trackingSpeedAttributeID) {
		return $this->db->queryField("SELECT published FROM dgmEffects WHERE trackingSpeedAttributeID = :trackingSpeedAttributeID", "published", array(":trackingSpeedAttributeID" => $trackingSpeedAttributeID));
	}

	/**
	 * @param int $dischargeAttributeID
	 */
	public function getRangeAttributeIDByDischargeAttributeID(int $dischargeAttributeID) {
		return $this->db->queryField("SELECT rangeAttributeID FROM dgmEffects WHERE dischargeAttributeID = :dischargeAttributeID", "rangeAttributeID", array(":dischargeAttributeID" => $dischargeAttributeID));
	}

	/**
	 * @param string $displayName
	 */
	public function getRangeAttributeIDByDisplayName(string $displayName) {
		return $this->db->queryField("SELECT rangeAttributeID FROM dgmEffects WHERE displayName = :displayName", "rangeAttributeID", array(":displayName" => $displayName));
	}

	/**
	 * @param int $durationAttributeID
	 */
	public function getRangeAttributeIDByDurationAttributeID(int $durationAttributeID) {
		return $this->db->queryField("SELECT rangeAttributeID FROM dgmEffects WHERE durationAttributeID = :durationAttributeID", "rangeAttributeID", array(":durationAttributeID" => $durationAttributeID));
	}

	/**
	 * @param int $effectID
	 */
	public function getRangeAttributeIDByEffectID(int $effectID) {
		return $this->db->queryField("SELECT rangeAttributeID FROM dgmEffects WHERE effectID = :effectID", "rangeAttributeID", array(":effectID" => $effectID));
	}

	/**
	 * @param string $effectName
	 */
	public function getRangeAttributeIDByEffectName(string $effectName) {
		return $this->db->queryField("SELECT rangeAttributeID FROM dgmEffects WHERE effectName = :effectName", "rangeAttributeID", array(":effectName" => $effectName));
	}

	/**
	 * @param int $falloffAttributeID
	 */
	public function getRangeAttributeIDByFalloffAttributeID(int $falloffAttributeID) {
		return $this->db->queryField("SELECT rangeAttributeID FROM dgmEffects WHERE falloffAttributeID = :falloffAttributeID", "rangeAttributeID", array(":falloffAttributeID" => $falloffAttributeID));
	}

	/**
	 * @param int $fittingUsageChanceAttributeID
	 */
	public function getRangeAttributeIDByFittingUsageChanceAttributeID(int $fittingUsageChanceAttributeID) {
		return $this->db->queryField("SELECT rangeAttributeID FROM dgmEffects WHERE fittingUsageChanceAttributeID = :fittingUsageChanceAttributeID", "rangeAttributeID", array(":fittingUsageChanceAttributeID" => $fittingUsageChanceAttributeID));
	}

	/**
	 * @param int $iconID
	 */
	public function getRangeAttributeIDByIconID(int $iconID) {
		return $this->db->queryField("SELECT rangeAttributeID FROM dgmEffects WHERE iconID = :iconID", "rangeAttributeID", array(":iconID" => $iconID));
	}

	/**
	 * @param int $npcActivationChanceAttributeID
	 */
	public function getRangeAttributeIDByNpcActivationChanceAttributeID(int $npcActivationChanceAttributeID) {
		return $this->db->queryField("SELECT rangeAttributeID FROM dgmEffects WHERE npcActivationChanceAttributeID = :npcActivationChanceAttributeID", "rangeAttributeID", array(":npcActivationChanceAttributeID" => $npcActivationChanceAttributeID));
	}

	/**
	 * @param int $npcUsageChanceAttributeID
	 */
	public function getRangeAttributeIDByNpcUsageChanceAttributeID(int $npcUsageChanceAttributeID) {
		return $this->db->queryField("SELECT rangeAttributeID FROM dgmEffects WHERE npcUsageChanceAttributeID = :npcUsageChanceAttributeID", "rangeAttributeID", array(":npcUsageChanceAttributeID" => $npcUsageChanceAttributeID));
	}

	/**
	 * @param string $sfxName
	 */
	public function getRangeAttributeIDBySfxName(string $sfxName) {
		return $this->db->queryField("SELECT rangeAttributeID FROM dgmEffects WHERE sfxName = :sfxName", "rangeAttributeID", array(":sfxName" => $sfxName));
	}

	/**
	 * @param int $trackingSpeedAttributeID
	 */
	public function getRangeAttributeIDByTrackingSpeedAttributeID(int $trackingSpeedAttributeID) {
		return $this->db->queryField("SELECT rangeAttributeID FROM dgmEffects WHERE trackingSpeedAttributeID = :trackingSpeedAttributeID", "rangeAttributeID", array(":trackingSpeedAttributeID" => $trackingSpeedAttributeID));
	}

	/**
	 * @param int $dischargeAttributeID
	 */
	public function getRangeChanceByDischargeAttributeID(int $dischargeAttributeID) {
		return $this->db->queryField("SELECT rangeChance FROM dgmEffects WHERE dischargeAttributeID = :dischargeAttributeID", "rangeChance", array(":dischargeAttributeID" => $dischargeAttributeID));
	}

	/**
	 * @param string $displayName
	 */
	public function getRangeChanceByDisplayName(string $displayName) {
		return $this->db->queryField("SELECT rangeChance FROM dgmEffects WHERE displayName = :displayName", "rangeChance", array(":displayName" => $displayName));
	}

	/**
	 * @param int $durationAttributeID
	 */
	public function getRangeChanceByDurationAttributeID(int $durationAttributeID) {
		return $this->db->queryField("SELECT rangeChance FROM dgmEffects WHERE durationAttributeID = :durationAttributeID", "rangeChance", array(":durationAttributeID" => $durationAttributeID));
	}

	/**
	 * @param int $effectID
	 */
	public function getRangeChanceByEffectID(int $effectID) {
		return $this->db->queryField("SELECT rangeChance FROM dgmEffects WHERE effectID = :effectID", "rangeChance", array(":effectID" => $effectID));
	}

	/**
	 * @param string $effectName
	 */
	public function getRangeChanceByEffectName(string $effectName) {
		return $this->db->queryField("SELECT rangeChance FROM dgmEffects WHERE effectName = :effectName", "rangeChance", array(":effectName" => $effectName));
	}

	/**
	 * @param int $falloffAttributeID
	 */
	public function getRangeChanceByFalloffAttributeID(int $falloffAttributeID) {
		return $this->db->queryField("SELECT rangeChance FROM dgmEffects WHERE falloffAttributeID = :falloffAttributeID", "rangeChance", array(":falloffAttributeID" => $falloffAttributeID));
	}

	/**
	 * @param int $fittingUsageChanceAttributeID
	 */
	public function getRangeChanceByFittingUsageChanceAttributeID(int $fittingUsageChanceAttributeID) {
		return $this->db->queryField("SELECT rangeChance FROM dgmEffects WHERE fittingUsageChanceAttributeID = :fittingUsageChanceAttributeID", "rangeChance", array(":fittingUsageChanceAttributeID" => $fittingUsageChanceAttributeID));
	}

	/**
	 * @param int $iconID
	 */
	public function getRangeChanceByIconID(int $iconID) {
		return $this->db->queryField("SELECT rangeChance FROM dgmEffects WHERE iconID = :iconID", "rangeChance", array(":iconID" => $iconID));
	}

	/**
	 * @param int $npcActivationChanceAttributeID
	 */
	public function getRangeChanceByNpcActivationChanceAttributeID(int $npcActivationChanceAttributeID) {
		return $this->db->queryField("SELECT rangeChance FROM dgmEffects WHERE npcActivationChanceAttributeID = :npcActivationChanceAttributeID", "rangeChance", array(":npcActivationChanceAttributeID" => $npcActivationChanceAttributeID));
	}

	/**
	 * @param int $npcUsageChanceAttributeID
	 */
	public function getRangeChanceByNpcUsageChanceAttributeID(int $npcUsageChanceAttributeID) {
		return $this->db->queryField("SELECT rangeChance FROM dgmEffects WHERE npcUsageChanceAttributeID = :npcUsageChanceAttributeID", "rangeChance", array(":npcUsageChanceAttributeID" => $npcUsageChanceAttributeID));
	}

	/**
	 * @param int $rangeAttributeID
	 */
	public function getRangeChanceByRangeAttributeID(int $rangeAttributeID) {
		return $this->db->queryField("SELECT rangeChance FROM dgmEffects WHERE rangeAttributeID = :rangeAttributeID", "rangeChance", array(":rangeAttributeID" => $rangeAttributeID));
	}

	/**
	 * @param string $sfxName
	 */
	public function getRangeChanceBySfxName(string $sfxName) {
		return $this->db->queryField("SELECT rangeChance FROM dgmEffects WHERE sfxName = :sfxName", "rangeChance", array(":sfxName" => $sfxName));
	}

	/**
	 * @param int $trackingSpeedAttributeID
	 */
	public function getRangeChanceByTrackingSpeedAttributeID(int $trackingSpeedAttributeID) {
		return $this->db->queryField("SELECT rangeChance FROM dgmEffects WHERE trackingSpeedAttributeID = :trackingSpeedAttributeID", "rangeChance", array(":trackingSpeedAttributeID" => $trackingSpeedAttributeID));
	}

	/**
	 * @param int $dischargeAttributeID
	 */
	public function getSfxNameByDischargeAttributeID(int $dischargeAttributeID) {
		return $this->db->queryField("SELECT sfxName FROM dgmEffects WHERE dischargeAttributeID = :dischargeAttributeID", "sfxName", array(":dischargeAttributeID" => $dischargeAttributeID));
	}

	/**
	 * @param string $displayName
	 */
	public function getSfxNameByDisplayName(string $displayName) {
		return $this->db->queryField("SELECT sfxName FROM dgmEffects WHERE displayName = :displayName", "sfxName", array(":displayName" => $displayName));
	}

	/**
	 * @param int $durationAttributeID
	 */
	public function getSfxNameByDurationAttributeID(int $durationAttributeID) {
		return $this->db->queryField("SELECT sfxName FROM dgmEffects WHERE durationAttributeID = :durationAttributeID", "sfxName", array(":durationAttributeID" => $durationAttributeID));
	}

	/**
	 * @param int $effectID
	 */
	public function getSfxNameByEffectID(int $effectID) {
		return $this->db->queryField("SELECT sfxName FROM dgmEffects WHERE effectID = :effectID", "sfxName", array(":effectID" => $effectID));
	}

	/**
	 * @param string $effectName
	 */
	public function getSfxNameByEffectName(string $effectName) {
		return $this->db->queryField("SELECT sfxName FROM dgmEffects WHERE effectName = :effectName", "sfxName", array(":effectName" => $effectName));
	}

	/**
	 * @param int $falloffAttributeID
	 */
	public function getSfxNameByFalloffAttributeID(int $falloffAttributeID) {
		return $this->db->queryField("SELECT sfxName FROM dgmEffects WHERE falloffAttributeID = :falloffAttributeID", "sfxName", array(":falloffAttributeID" => $falloffAttributeID));
	}

	/**
	 * @param int $fittingUsageChanceAttributeID
	 */
	public function getSfxNameByFittingUsageChanceAttributeID(int $fittingUsageChanceAttributeID) {
		return $this->db->queryField("SELECT sfxName FROM dgmEffects WHERE fittingUsageChanceAttributeID = :fittingUsageChanceAttributeID", "sfxName", array(":fittingUsageChanceAttributeID" => $fittingUsageChanceAttributeID));
	}

	/**
	 * @param int $iconID
	 */
	public function getSfxNameByIconID(int $iconID) {
		return $this->db->queryField("SELECT sfxName FROM dgmEffects WHERE iconID = :iconID", "sfxName", array(":iconID" => $iconID));
	}

	/**
	 * @param int $npcActivationChanceAttributeID
	 */
	public function getSfxNameByNpcActivationChanceAttributeID(int $npcActivationChanceAttributeID) {
		return $this->db->queryField("SELECT sfxName FROM dgmEffects WHERE npcActivationChanceAttributeID = :npcActivationChanceAttributeID", "sfxName", array(":npcActivationChanceAttributeID" => $npcActivationChanceAttributeID));
	}

	/**
	 * @param int $npcUsageChanceAttributeID
	 */
	public function getSfxNameByNpcUsageChanceAttributeID(int $npcUsageChanceAttributeID) {
		return $this->db->queryField("SELECT sfxName FROM dgmEffects WHERE npcUsageChanceAttributeID = :npcUsageChanceAttributeID", "sfxName", array(":npcUsageChanceAttributeID" => $npcUsageChanceAttributeID));
	}

	/**
	 * @param int $rangeAttributeID
	 */
	public function getSfxNameByRangeAttributeID(int $rangeAttributeID) {
		return $this->db->queryField("SELECT sfxName FROM dgmEffects WHERE rangeAttributeID = :rangeAttributeID", "sfxName", array(":rangeAttributeID" => $rangeAttributeID));
	}

	/**
	 * @param int $trackingSpeedAttributeID
	 */
	public function getSfxNameByTrackingSpeedAttributeID(int $trackingSpeedAttributeID) {
		return $this->db->queryField("SELECT sfxName FROM dgmEffects WHERE trackingSpeedAttributeID = :trackingSpeedAttributeID", "sfxName", array(":trackingSpeedAttributeID" => $trackingSpeedAttributeID));
	}

	/**
	 * @param int $dischargeAttributeID
	 */
	public function getTrackingSpeedAttributeIDByDischargeAttributeID(int $dischargeAttributeID) {
		return $this->db->queryField("SELECT trackingSpeedAttributeID FROM dgmEffects WHERE dischargeAttributeID = :dischargeAttributeID", "trackingSpeedAttributeID", array(":dischargeAttributeID" => $dischargeAttributeID));
	}

	/**
	 * @param string $displayName
	 */
	public function getTrackingSpeedAttributeIDByDisplayName(string $displayName) {
		return $this->db->queryField("SELECT trackingSpeedAttributeID FROM dgmEffects WHERE displayName = :displayName", "trackingSpeedAttributeID", array(":displayName" => $displayName));
	}

	/**
	 * @param int $durationAttributeID
	 */
	public function getTrackingSpeedAttributeIDByDurationAttributeID(int $durationAttributeID) {
		return $this->db->queryField("SELECT trackingSpeedAttributeID FROM dgmEffects WHERE durationAttributeID = :durationAttributeID", "trackingSpeedAttributeID", array(":durationAttributeID" => $durationAttributeID));
	}

	/**
	 * @param int $effectID
	 */
	public function getTrackingSpeedAttributeIDByEffectID(int $effectID) {
		return $this->db->queryField("SELECT trackingSpeedAttributeID FROM dgmEffects WHERE effectID = :effectID", "trackingSpeedAttributeID", array(":effectID" => $effectID));
	}

	/**
	 * @param string $effectName
	 */
	public function getTrackingSpeedAttributeIDByEffectName(string $effectName) {
		return $this->db->queryField("SELECT trackingSpeedAttributeID FROM dgmEffects WHERE effectName = :effectName", "trackingSpeedAttributeID", array(":effectName" => $effectName));
	}

	/**
	 * @param int $falloffAttributeID
	 */
	public function getTrackingSpeedAttributeIDByFalloffAttributeID(int $falloffAttributeID) {
		return $this->db->queryField("SELECT trackingSpeedAttributeID FROM dgmEffects WHERE falloffAttributeID = :falloffAttributeID", "trackingSpeedAttributeID", array(":falloffAttributeID" => $falloffAttributeID));
	}

	/**
	 * @param int $fittingUsageChanceAttributeID
	 */
	public function getTrackingSpeedAttributeIDByFittingUsageChanceAttributeID(int $fittingUsageChanceAttributeID) {
		return $this->db->queryField("SELECT trackingSpeedAttributeID FROM dgmEffects WHERE fittingUsageChanceAttributeID = :fittingUsageChanceAttributeID", "trackingSpeedAttributeID", array(":fittingUsageChanceAttributeID" => $fittingUsageChanceAttributeID));
	}

	/**
	 * @param int $iconID
	 */
	public function getTrackingSpeedAttributeIDByIconID(int $iconID) {
		return $this->db->queryField("SELECT trackingSpeedAttributeID FROM dgmEffects WHERE iconID = :iconID", "trackingSpeedAttributeID", array(":iconID" => $iconID));
	}

	/**
	 * @param int $npcActivationChanceAttributeID
	 */
	public function getTrackingSpeedAttributeIDByNpcActivationChanceAttributeID(int $npcActivationChanceAttributeID) {
		return $this->db->queryField("SELECT trackingSpeedAttributeID FROM dgmEffects WHERE npcActivationChanceAttributeID = :npcActivationChanceAttributeID", "trackingSpeedAttributeID", array(":npcActivationChanceAttributeID" => $npcActivationChanceAttributeID));
	}

	/**
	 * @param int $npcUsageChanceAttributeID
	 */
	public function getTrackingSpeedAttributeIDByNpcUsageChanceAttributeID(int $npcUsageChanceAttributeID) {
		return $this->db->queryField("SELECT trackingSpeedAttributeID FROM dgmEffects WHERE npcUsageChanceAttributeID = :npcUsageChanceAttributeID", "trackingSpeedAttributeID", array(":npcUsageChanceAttributeID" => $npcUsageChanceAttributeID));
	}

	/**
	 * @param int $rangeAttributeID
	 */
	public function getTrackingSpeedAttributeIDByRangeAttributeID(int $rangeAttributeID) {
		return $this->db->queryField("SELECT trackingSpeedAttributeID FROM dgmEffects WHERE rangeAttributeID = :rangeAttributeID", "trackingSpeedAttributeID", array(":rangeAttributeID" => $rangeAttributeID));
	}

	/**
	 * @param string $sfxName
	 */
	public function getTrackingSpeedAttributeIDBySfxName(string $sfxName) {
		return $this->db->queryField("SELECT trackingSpeedAttributeID FROM dgmEffects WHERE sfxName = :sfxName", "trackingSpeedAttributeID", array(":sfxName" => $sfxName));
	}
}