<?php

namespace ContainerMlAfQpi;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderaf673 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializercbef1 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiese0946 = [
        
    ];

    public function getConnection()
    {
        $this->initializercbef1 && ($this->initializercbef1->__invoke($valueHolderaf673, $this, 'getConnection', array(), $this->initializercbef1) || 1) && $this->valueHolderaf673 = $valueHolderaf673;

        return $this->valueHolderaf673->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializercbef1 && ($this->initializercbef1->__invoke($valueHolderaf673, $this, 'getMetadataFactory', array(), $this->initializercbef1) || 1) && $this->valueHolderaf673 = $valueHolderaf673;

        return $this->valueHolderaf673->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializercbef1 && ($this->initializercbef1->__invoke($valueHolderaf673, $this, 'getExpressionBuilder', array(), $this->initializercbef1) || 1) && $this->valueHolderaf673 = $valueHolderaf673;

        return $this->valueHolderaf673->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializercbef1 && ($this->initializercbef1->__invoke($valueHolderaf673, $this, 'beginTransaction', array(), $this->initializercbef1) || 1) && $this->valueHolderaf673 = $valueHolderaf673;

        return $this->valueHolderaf673->beginTransaction();
    }

    public function getCache()
    {
        $this->initializercbef1 && ($this->initializercbef1->__invoke($valueHolderaf673, $this, 'getCache', array(), $this->initializercbef1) || 1) && $this->valueHolderaf673 = $valueHolderaf673;

        return $this->valueHolderaf673->getCache();
    }

    public function transactional($func)
    {
        $this->initializercbef1 && ($this->initializercbef1->__invoke($valueHolderaf673, $this, 'transactional', array('func' => $func), $this->initializercbef1) || 1) && $this->valueHolderaf673 = $valueHolderaf673;

        return $this->valueHolderaf673->transactional($func);
    }

    public function commit()
    {
        $this->initializercbef1 && ($this->initializercbef1->__invoke($valueHolderaf673, $this, 'commit', array(), $this->initializercbef1) || 1) && $this->valueHolderaf673 = $valueHolderaf673;

        return $this->valueHolderaf673->commit();
    }

    public function rollback()
    {
        $this->initializercbef1 && ($this->initializercbef1->__invoke($valueHolderaf673, $this, 'rollback', array(), $this->initializercbef1) || 1) && $this->valueHolderaf673 = $valueHolderaf673;

        return $this->valueHolderaf673->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializercbef1 && ($this->initializercbef1->__invoke($valueHolderaf673, $this, 'getClassMetadata', array('className' => $className), $this->initializercbef1) || 1) && $this->valueHolderaf673 = $valueHolderaf673;

        return $this->valueHolderaf673->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializercbef1 && ($this->initializercbef1->__invoke($valueHolderaf673, $this, 'createQuery', array('dql' => $dql), $this->initializercbef1) || 1) && $this->valueHolderaf673 = $valueHolderaf673;

        return $this->valueHolderaf673->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializercbef1 && ($this->initializercbef1->__invoke($valueHolderaf673, $this, 'createNamedQuery', array('name' => $name), $this->initializercbef1) || 1) && $this->valueHolderaf673 = $valueHolderaf673;

        return $this->valueHolderaf673->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializercbef1 && ($this->initializercbef1->__invoke($valueHolderaf673, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializercbef1) || 1) && $this->valueHolderaf673 = $valueHolderaf673;

        return $this->valueHolderaf673->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializercbef1 && ($this->initializercbef1->__invoke($valueHolderaf673, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializercbef1) || 1) && $this->valueHolderaf673 = $valueHolderaf673;

        return $this->valueHolderaf673->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializercbef1 && ($this->initializercbef1->__invoke($valueHolderaf673, $this, 'createQueryBuilder', array(), $this->initializercbef1) || 1) && $this->valueHolderaf673 = $valueHolderaf673;

        return $this->valueHolderaf673->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializercbef1 && ($this->initializercbef1->__invoke($valueHolderaf673, $this, 'flush', array('entity' => $entity), $this->initializercbef1) || 1) && $this->valueHolderaf673 = $valueHolderaf673;

        return $this->valueHolderaf673->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializercbef1 && ($this->initializercbef1->__invoke($valueHolderaf673, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializercbef1) || 1) && $this->valueHolderaf673 = $valueHolderaf673;

        return $this->valueHolderaf673->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializercbef1 && ($this->initializercbef1->__invoke($valueHolderaf673, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializercbef1) || 1) && $this->valueHolderaf673 = $valueHolderaf673;

        return $this->valueHolderaf673->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializercbef1 && ($this->initializercbef1->__invoke($valueHolderaf673, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializercbef1) || 1) && $this->valueHolderaf673 = $valueHolderaf673;

        return $this->valueHolderaf673->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializercbef1 && ($this->initializercbef1->__invoke($valueHolderaf673, $this, 'clear', array('entityName' => $entityName), $this->initializercbef1) || 1) && $this->valueHolderaf673 = $valueHolderaf673;

        return $this->valueHolderaf673->clear($entityName);
    }

    public function close()
    {
        $this->initializercbef1 && ($this->initializercbef1->__invoke($valueHolderaf673, $this, 'close', array(), $this->initializercbef1) || 1) && $this->valueHolderaf673 = $valueHolderaf673;

        return $this->valueHolderaf673->close();
    }

    public function persist($entity)
    {
        $this->initializercbef1 && ($this->initializercbef1->__invoke($valueHolderaf673, $this, 'persist', array('entity' => $entity), $this->initializercbef1) || 1) && $this->valueHolderaf673 = $valueHolderaf673;

        return $this->valueHolderaf673->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializercbef1 && ($this->initializercbef1->__invoke($valueHolderaf673, $this, 'remove', array('entity' => $entity), $this->initializercbef1) || 1) && $this->valueHolderaf673 = $valueHolderaf673;

        return $this->valueHolderaf673->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializercbef1 && ($this->initializercbef1->__invoke($valueHolderaf673, $this, 'refresh', array('entity' => $entity), $this->initializercbef1) || 1) && $this->valueHolderaf673 = $valueHolderaf673;

        return $this->valueHolderaf673->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializercbef1 && ($this->initializercbef1->__invoke($valueHolderaf673, $this, 'detach', array('entity' => $entity), $this->initializercbef1) || 1) && $this->valueHolderaf673 = $valueHolderaf673;

        return $this->valueHolderaf673->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializercbef1 && ($this->initializercbef1->__invoke($valueHolderaf673, $this, 'merge', array('entity' => $entity), $this->initializercbef1) || 1) && $this->valueHolderaf673 = $valueHolderaf673;

        return $this->valueHolderaf673->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializercbef1 && ($this->initializercbef1->__invoke($valueHolderaf673, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializercbef1) || 1) && $this->valueHolderaf673 = $valueHolderaf673;

        return $this->valueHolderaf673->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializercbef1 && ($this->initializercbef1->__invoke($valueHolderaf673, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializercbef1) || 1) && $this->valueHolderaf673 = $valueHolderaf673;

        return $this->valueHolderaf673->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializercbef1 && ($this->initializercbef1->__invoke($valueHolderaf673, $this, 'getRepository', array('entityName' => $entityName), $this->initializercbef1) || 1) && $this->valueHolderaf673 = $valueHolderaf673;

        return $this->valueHolderaf673->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializercbef1 && ($this->initializercbef1->__invoke($valueHolderaf673, $this, 'contains', array('entity' => $entity), $this->initializercbef1) || 1) && $this->valueHolderaf673 = $valueHolderaf673;

        return $this->valueHolderaf673->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializercbef1 && ($this->initializercbef1->__invoke($valueHolderaf673, $this, 'getEventManager', array(), $this->initializercbef1) || 1) && $this->valueHolderaf673 = $valueHolderaf673;

        return $this->valueHolderaf673->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializercbef1 && ($this->initializercbef1->__invoke($valueHolderaf673, $this, 'getConfiguration', array(), $this->initializercbef1) || 1) && $this->valueHolderaf673 = $valueHolderaf673;

        return $this->valueHolderaf673->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializercbef1 && ($this->initializercbef1->__invoke($valueHolderaf673, $this, 'isOpen', array(), $this->initializercbef1) || 1) && $this->valueHolderaf673 = $valueHolderaf673;

        return $this->valueHolderaf673->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializercbef1 && ($this->initializercbef1->__invoke($valueHolderaf673, $this, 'getUnitOfWork', array(), $this->initializercbef1) || 1) && $this->valueHolderaf673 = $valueHolderaf673;

        return $this->valueHolderaf673->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializercbef1 && ($this->initializercbef1->__invoke($valueHolderaf673, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializercbef1) || 1) && $this->valueHolderaf673 = $valueHolderaf673;

        return $this->valueHolderaf673->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializercbef1 && ($this->initializercbef1->__invoke($valueHolderaf673, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializercbef1) || 1) && $this->valueHolderaf673 = $valueHolderaf673;

        return $this->valueHolderaf673->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializercbef1 && ($this->initializercbef1->__invoke($valueHolderaf673, $this, 'getProxyFactory', array(), $this->initializercbef1) || 1) && $this->valueHolderaf673 = $valueHolderaf673;

        return $this->valueHolderaf673->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializercbef1 && ($this->initializercbef1->__invoke($valueHolderaf673, $this, 'initializeObject', array('obj' => $obj), $this->initializercbef1) || 1) && $this->valueHolderaf673 = $valueHolderaf673;

        return $this->valueHolderaf673->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializercbef1 && ($this->initializercbef1->__invoke($valueHolderaf673, $this, 'getFilters', array(), $this->initializercbef1) || 1) && $this->valueHolderaf673 = $valueHolderaf673;

        return $this->valueHolderaf673->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializercbef1 && ($this->initializercbef1->__invoke($valueHolderaf673, $this, 'isFiltersStateClean', array(), $this->initializercbef1) || 1) && $this->valueHolderaf673 = $valueHolderaf673;

        return $this->valueHolderaf673->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializercbef1 && ($this->initializercbef1->__invoke($valueHolderaf673, $this, 'hasFilters', array(), $this->initializercbef1) || 1) && $this->valueHolderaf673 = $valueHolderaf673;

        return $this->valueHolderaf673->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializercbef1 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderaf673) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderaf673 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderaf673->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializercbef1 && ($this->initializercbef1->__invoke($valueHolderaf673, $this, '__get', ['name' => $name], $this->initializercbef1) || 1) && $this->valueHolderaf673 = $valueHolderaf673;

        if (isset(self::$publicPropertiese0946[$name])) {
            return $this->valueHolderaf673->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderaf673;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderaf673;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializercbef1 && ($this->initializercbef1->__invoke($valueHolderaf673, $this, '__set', array('name' => $name, 'value' => $value), $this->initializercbef1) || 1) && $this->valueHolderaf673 = $valueHolderaf673;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderaf673;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderaf673;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializercbef1 && ($this->initializercbef1->__invoke($valueHolderaf673, $this, '__isset', array('name' => $name), $this->initializercbef1) || 1) && $this->valueHolderaf673 = $valueHolderaf673;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderaf673;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderaf673;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializercbef1 && ($this->initializercbef1->__invoke($valueHolderaf673, $this, '__unset', array('name' => $name), $this->initializercbef1) || 1) && $this->valueHolderaf673 = $valueHolderaf673;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderaf673;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderaf673;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializercbef1 && ($this->initializercbef1->__invoke($valueHolderaf673, $this, '__clone', array(), $this->initializercbef1) || 1) && $this->valueHolderaf673 = $valueHolderaf673;

        $this->valueHolderaf673 = clone $this->valueHolderaf673;
    }

    public function __sleep()
    {
        $this->initializercbef1 && ($this->initializercbef1->__invoke($valueHolderaf673, $this, '__sleep', array(), $this->initializercbef1) || 1) && $this->valueHolderaf673 = $valueHolderaf673;

        return array('valueHolderaf673');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializercbef1 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializercbef1;
    }

    public function initializeProxy() : bool
    {
        return $this->initializercbef1 && ($this->initializercbef1->__invoke($valueHolderaf673, $this, 'initializeProxy', array(), $this->initializercbef1) || 1) && $this->valueHolderaf673 = $valueHolderaf673;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderaf673;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderaf673;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
