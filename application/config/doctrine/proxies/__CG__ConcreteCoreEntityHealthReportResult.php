<?php

namespace DoctrineProxies\__CG__\Concrete\Core\Entity\Health\Report;


/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Result extends \Concrete\Core\Entity\Health\Report\Result implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', 'id', 'task', 'findings', 'dateStarted', 'dateCompleted', 'score', 'grade', 'name'];
        }

        return ['__isInitialized__', 'id', 'task', 'findings', 'dateStarted', 'dateCompleted', 'score', 'grade', 'name'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Result $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load(): void
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized(): bool
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized): void
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(?\Closure $initializer = null): void
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer(): ?\Closure
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(?\Closure $cloner = null): void
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner(): ?\Closure
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties(): array
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function getTask()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTask', []);

        return parent::getTask();
    }

    /**
     * {@inheritDoc}
     */
    public function setTask($task): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTask', [$task]);

        parent::setTask($task);
    }

    /**
     * {@inheritDoc}
     */
    public function getName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getName', []);

        return parent::getName();
    }

    /**
     * {@inheritDoc}
     */
    public function setName($name): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setName', [$name]);

        parent::setName($name);
    }

    /**
     * {@inheritDoc}
     */
    public function setDateStarted($dateStarted): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateStarted', [$dateStarted]);

        parent::setDateStarted($dateStarted);
    }

    /**
     * {@inheritDoc}
     */
    public function setDateCompleted($dateCompleted): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateCompleted', [$dateCompleted]);

        parent::setDateCompleted($dateCompleted);
    }

    /**
     * {@inheritDoc}
     */
    public function getTotalFindings(): int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTotalFindings', []);

        return parent::getTotalFindings();
    }

    /**
     * {@inheritDoc}
     */
    public function getDateStarted($mask = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateStarted', [$mask]);

        return parent::getDateStarted($mask);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateCompleted($mask = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateCompleted', [$mask]);

        return parent::getDateCompleted($mask);
    }

    /**
     * {@inheritDoc}
     */
    public function getFindings()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFindings', []);

        return parent::getFindings();
    }

    /**
     * {@inheritDoc}
     */
    public function getWeightedFindings(): array
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getWeightedFindings', []);

        return parent::getWeightedFindings();
    }

    /**
     * {@inheritDoc}
     */
    public function getScore()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getScore', []);

        return parent::getScore();
    }

    /**
     * {@inheritDoc}
     */
    public function setScore($score): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setScore', [$score]);

        parent::setScore($score);
    }

    /**
     * {@inheritDoc}
     */
    public function setGrade($grade): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGrade', [$grade]);

        parent::setGrade($grade);
    }

    /**
     * {@inheritDoc}
     */
    public function getRawGrade()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRawGrade', []);

        return parent::getRawGrade();
    }

    /**
     * {@inheritDoc}
     */
    public function getGrade(): ?\Concrete\Core\Health\Grade\GradeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGrade', []);

        return parent::getGrade();
    }

    /**
     * {@inheritDoc}
     */
    public function getFormatter(): \Concrete\Core\Health\Report\Result\Formatter\FormatterInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFormatter', []);

        return parent::getFormatter();
    }

}
