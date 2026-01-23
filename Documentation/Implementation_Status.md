# Статус реализации проекта

## [ ] Этап 1: Скелет и конфигурация
- [x] Зачистка старой системы и БД
- [x] Создание структуры Documentation/
- [ ] Генерация composer.json и ext_emconf.php
- [ ] Настройка Services.yaml (DI / Autowiring)

## [ ] Этап 2: Схема данных (TCA)
- [ ] Описание таблиц в ext_tables.sql
- [ ] Создание Domain моделей (Location, Category, Item)
- [ ] Регистрация иконок и плагинов в tt_content

## [ ] Этап 3: Бизнес-логика (Services)
- [ ] OrderValidationService (Часы работы)
- [ ] CartService (Серверная часть логики корзины)

## [ ] Этап 4: Frontend (Fluid & JS)
- [ ] Базовые Layouts
- [ ] Компонент корзины (Local Storage v2)
- [ ] Плагин Menu List (Grid/List режимы)

## [ ] Этап 5: Интеграции
- [ ] Поля для внешних ID (POS/iiko/etc)
- [ ] Плагин Integrations
